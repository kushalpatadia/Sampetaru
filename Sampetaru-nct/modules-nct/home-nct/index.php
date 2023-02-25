<?php

$reqAuth = false;
$module = 'home-nct';
require_once "../../includes-nct/config-nct.php";
require_once "class.home-nct.php";

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
if (isset($_POST['btn_post_form'])) {
	if (isset($_SESSION['login_user']) && isset($_SESSION['username']) && isset($_SESSION['userid'])) {
		$l_start = $_POST['l_start'];
		$l_end = $_POST['l_end'];
		$d_start = $_POST['d_start'];
		$d_end = $_POST['d_end'];
		//echo $l_start." ".$l_end." ".$d_start." ".$d_end;
		redirectPage(SITE_MOD.'applypost-nct/?pickup='.$l_start.'&pickoff='.$l_end.'&date1='.$d_start.'&date2='.$d_end);
	}
	else
	{
		echo "<script>alert('you must login for this module')</script>";
		echo "<script>window.location='".SITE_MOD."login-nct/'</script>";
	}
}
// $output = $_SESSION['userid'];
// echo $output;
$obj = new Home($module, 0, issetor($token));

$pageContent = $obj->getPageContent();

require_once DIR_TMPL . "parsing-nct.tpl.php";
?>