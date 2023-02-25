<?php
$module = 'login-nct';
require_once "../../includes-nct/config-nct.php";
require_once "class.login-nct.php";


extract($_REQUEST);

$winTitle = 'Login';

$headTitle = 'Login';
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle /*, "author" => AUTHOR*/));


if(isset($_POST['Login']))
{ 
	$email=$_POST['email'];
	$pass=$_POST['password1'];
	
	extract($_POST);
	// To protect MySQL injection for Security purpose
	$pass=md5(md5('sp'.$pass.'ps'));
	$email = stripslashes($email);
	$pass = stripslashes($pass);
	$email = mysqli_real_escape_string($conn, $email);
	$pass = mysqli_real_escape_string($conn, $pass);
	$date = date('Y-m-d H:i:s');
	$ip = $_SERVER['REMOTE_ADDR'];

	if($email != '' && $pass != '') 
	{
		$query = mysqli_query($conn, "SELECT * FROM tbl_register_user WHERE password='$pass' AND email='$email'");
		$updated = "UPDATE tbl_register_users SET last_logintime = '$date', ipaddress = '$ip' WHERE email = '$email'";
		$rows = mysqli_num_rows($query);
		if ($rows == 1) {
			$row=mysqli_fetch_array($query);
			$status = $row['isActive'];
			if($status == 'a'){
				$_SESSION['login_user']=$row['email'];
				$_SESSION['username']=$row['fname'];
				$_SESSION['userid']=$row['r_id']; // Initializing Session
				mysqli_query($conn,$updated);
				//echo "<script>alert('Login successfully')</script>";
				echo "<script>window.location='../home-nct/'</script>";
			}	
			else{
				echo "<script>alert('Must Active Your Account')</script>";
			}
		}
		else {
				echo "<script>alert('enter valid email or password')</script>";		
		}
		mysqli_close($conn); // Closing Connection
		}
} 

if (isset($_SESSION['login_user']) && isset($_SESSION['userid'])) {
	redirectPage(SITE_URL);
}
else
{
	$obj = new Login($module, 0, issetor($token));
	$pageContent = $obj->getPageContent();
}
require_once DIR_TMPL . "parsing-nct.tpl.php";
?>