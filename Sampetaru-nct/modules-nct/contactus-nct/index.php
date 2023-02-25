<?php
#############################################################
# Project:			Demo Project - Contact Us Page
# Developer ID:		107
# Page: 			Contact Us
# Started Date: 	19-Jul-2016
##############################################################
$reqAuth = false;
$module = 'contactus-nct';
require_once "../../includes-nct/config-nct.php";
require_once "class.contactus-nct.php";


extract($_REQUEST);
$winTitle = 'Contact Us ';

$headTitle = 'Contact Us ';
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle/*, "author" => AUTHOR*/));


if(isset($_POST['contactus']))
{ 
	extract($_POST);
    $firstName=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
    $subject=$_POST['subject'];
	$date =  date('Y-m-d H:i:s'); 
	$ip = get_ip_address();
	    
	if($email != '' && $message != '' && $firstName != '' && $subject != '') 
	{
		$insertquery = "INSERT INTO `tbl_contact_us`(`firstName`, `subject`, `email`, `message`, `createdDate`, `ipAddress`) VALUES ('$firstName','$email','$message','$subject','$date','$ip')";
		$result = mysqli_query($conn,$insertquery);
		if ($result>0) {
			redirectPage(SITE_MOD.'contactus-nct/');
		}
	}
	else
	{
		echo "<script>alert('please filled all values')</script>";
	}
	    
}
$obj = new ContactUs($module, 0, issetor($token));
$pageContent = $obj->getPageContent();

require_once DIR_TMPL . "parsing-nct.tpl.php";
?>