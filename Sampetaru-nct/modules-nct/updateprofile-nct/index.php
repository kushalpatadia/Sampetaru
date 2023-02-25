<?php

$reqAuth = false;
$module = 'updateprofile-nct';
require_once "../../includes-nct/config-nct.php";
require_once "class.updateprofile-nct.php";

extract($_REQUEST);

$winTitle = 'Update Profile';
$headTitle = 'Update Profile' ;
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle, "author" => AUTHOR));
$date =  date('Y-m-d H:i:s');

$obj = new UpdateProfile($module, 0, issetor($token));
$pageContent = $obj->getPageContent();
if (isset($_POST['update']))
{	
	$id=$_SESSION['userid'];
	$username=$_POST['username'];

	$lname = $_POST['lname'];
	$mobile = $_POST['mobile'];
	$occupation = $_POST['occupation'];
	$b_date = $_POST['b_date'];
	$address1 = $_POST['address1'];
	$area = $_POST['area'];
	$city = $_POST['city'];
	$pincode = $_POST['pincode'];
	$state = $_POST['state'];
	$country = $_POST['country'];

	$query = "UPDATE `tbl_register_user` SET `fname`='$username',`lname`='$lname',`occupation`='$occupation',`b_date`='$b_date',`last_updatetime`='$date',`address1`='$address1',`area`='$area',`city`='$city',`pincode`='$pincode',`state`='$state',`country`='$country',`mobile`='$mobile' WHERE r_id='$id'";
 	$rel = mysqli_query($conn,$query);
 	redirectPage(SITE_MOD."profile-nct/");
}


require_once DIR_TMPL . "parsing-nct.tpl.php";
?>