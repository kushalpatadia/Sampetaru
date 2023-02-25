<?php


$reqAuth = false;
$module = 'manageuser-nct';
require_once "../../../includes-nct/config-nct.php";
require_once "class.manageuser-nct.php";

$winTitle = 'Manage Users';

$headTitle = 'Manage Users';
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle /*, "author" => AUTHOR*/));

/* GET Value from user for update details*/
if(isset($_POST['updateuser'])){
		$userdetails = $_POST['userdetails'];
    	$username = $_POST['username'];
    	$status = $_POST['status'];
		$result= "UPDATE `register_users` SET `username`='$username',`status`='$status' WHERE u_id='$userdetails'";
		$query = mysqli_query($conn,$result);
		echo "<script>alert('Updated')</script>";
		redirectPage(SITE_ADM_MOD.'manageuser-nct/');
}

if (isset($_SESSION['adminusername'])){
$obj = new ManageUser($module, 0, issetor($token));

$pageContent = $obj->getPageContent();
}
else{
	redirectPage(SITE_ADMIN_URL);
}

require_once DIR_ADMIN_TMPL . "parsing-nct.tpl.php";
?>