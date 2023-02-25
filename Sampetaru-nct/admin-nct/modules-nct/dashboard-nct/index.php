<?php

$reqAuth = false;
$module = 'dashboard-nct';
require_once "../../../includes-nct/config-nct.php";
require_once "class.dashboard-nct.php";

extract($_REQUEST);

	$winTitle = 'Home';
$headTitle = 'Home' ;
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle, "author" => AUTHOR));

if(isset($_POST['subscribe']))
{ 
	extract($_POST);
	$email=isset($email)?$email:'';	
	$date =  date('Y-m-d H:i:s'); 

	$ip = get_ip_address();
	    
	if($email != '' ) 
	{
		$insertarray=array("email"=>$email,"status"=>'a',"ipAddress"=>$ip,"subscribed_on"=>$date);	             
            $insert_id=$db->insert('tbl_subscribers',$insertarray)->getLastInsertId();
	        $msgType = $_SESSION["msgType"] = disMessage(array('type'=>'suc','var'=>'Your subscription to this site is successfull. '));        
    }else{
    	$msgType = $_SESSION["msgType"] = disMessage(array('type'=>'err','var'=>'Fill all value first.'));
    }
	    
} 
if (isset($_SESSION['adminusername'])){
$obj = new Dashboard($module, 0, issetor($token));
$pageContent = $obj->getPageContent();
}
else{
	redirectPage(SITE_ADMIN_URL);
}
require_once DIR_ADMIN_TMPL . "parsing-nct.tpl.php";
?>