<?php


$reqAuth = false;
$module = 'manageslider-nct';
require_once "../../../includes-nct/config-nct.php";
require_once "class.manageslider-nct.php";

$winTitle = 'Manage Slider';

$headTitle = 'Manage Slider';
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle /*, "author" => AUTHOR*/));

if(isset($_POST['updateslider'])){
	$sliderdetails = $_POST['sliderdetails'];
	$title = $_POST['title'];
	$discount = $_POST['discount'];
	$description=$_POST['description'];
	$position = $_POST['position'];
	$status = $_POST['status'];
	$result= "UPDATE `tbl_slider` SET `title`='$title', `discount`='$discount', `description`='$description', `isUpDown`='$position', `isActive`='$status' WHERE id='$sliderdetails'";
	$query = mysqli_query($conn,$result);
}
if (isset($_SESSION['adminusername'])){
$obj = new ManageSlider($module, 0, issetor($token));

$pageContent = $obj->getPageContent();
}
else{
	redirectPage(SITE_ADMIN_URL);
}

require_once DIR_ADMIN_TMPL . "parsing-nct.tpl.php";
?>