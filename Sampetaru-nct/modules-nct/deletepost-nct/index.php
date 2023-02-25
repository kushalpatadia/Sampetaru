<?php

$reqAuth = false;
$module = 'deletepost-nct';
require_once "../../includes-nct/config-nct.php";
require_once "../../includes-nct/database-nct.php";

//require_once "class.cart-nct.php";

extract($_REQUEST);

$winTitle = 'Delete Cart';
$headTitle = 'Delete Cart' ;
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle));

$conn=mysqli_connect("localhost","root","","sampetaru");
$p_id = $_GET['id'];
echo $p_id;
	$sql = "DELETE FROM tbl_posts WHERE p_id='$p_id'";
	mysqli_query($conn, $sql);
//$obj = new Cart($module, 0, issetor($token));
echo "<script>window.location='../mypost-nct/'</script>";
?>
