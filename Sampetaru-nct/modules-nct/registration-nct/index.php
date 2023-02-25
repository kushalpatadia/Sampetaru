<?php
$module = 'registration-nct';
require_once "../../includes-nct/config-nct.php";
require_once "class.registration-nct.php";


extract($_REQUEST);

$winTitle = 'Register Me';
$headTitle = 'Register Me';
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle /*, "author" => AUTHOR*/));

if (isset($_POST['submit']))
{
	extract($_POST);
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$occupation = $_POST['occupation'];
	$b_date = $_POST['b_date'];
	$address1 = $_POST['address1'];
	$area = $_POST['area'];
	$city = $_POST['city'];
	$pincode = $_POST['pincode'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$mobi = $_POST['phone_no'];
	$password = $_POST['password'];
	$password=md5(md5('sp'.$password.'ps'));
	$date =  date('Y-m-d H:i:s');
	$rip = $_SERVER['REMOTE_ADDR'];


	$check=mysqli_query($conn,"SELECT email FROM tbl_register_user WHERE email='$email' AND oauth_provider = '' ");
	$rows=mysqli_num_rows($check);
	if ($rows==1) {
		echo "<script>alert('Already regiserd email')</script>";
		echo "<script>window.location='../registration-nct'</script>";
	}
	else
	{
		if($email != '' && $fname != '' && $password != '' && $mobi != '') 
		{
			$sql = "INSERT INTO `tbl_register_user`(`fname`, `lname`, `email`, `password`, `occupation`, `b_date`, `created_date`, `ipaddress`, `address1`, `area`, `city`, `pincode`, `state`, `country`, `mobile`) VALUES ('$fname','$lname','$email','$password','$occupation','b_date','$date','$rip','$address1','$area','$city','$pincode','$state','$country','$mobi')";
			mysqli_query($conn, $sql);
			echo "<script>alert('Inserted Successfully')</script>";
			echo "<script>window.location = '../login-nct/';</script>";
		} 
		else
		{
			echo "<script>alert('error')</script>";
		}
	
	}
}

if (isset($_SESSION['login_user']) && $_SESSION['userid']) {
	redirectPage(SITE_URL);
}
else
{
	$obj = new Register($module, 0, issetor($token));
	$pageContent = $obj->getPageContent();
}
require_once DIR_TMPL . "parsing-nct.tpl.php";
?>