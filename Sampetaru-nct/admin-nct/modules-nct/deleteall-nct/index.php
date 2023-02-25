<?php

$reqAuth = false;
$module = 'deleteproduct-nct';
require_once "../../../includes-nct/config-nct.php";

$winTitle = 'Delete Product';

$headTitle = 'Delete Product';
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle /*, "author" => AUTHOR*/));

if(isset($_GET['deleteproduct'])){
	$deleteproduct = $_GET['deleteproduct'];
    /*delete query*/
    mysqli_connect("localhost","root","","markethub");
    $sql = "DELETE FROM tbl_products WHERE id='$deleteproduct'";
    $query= mysqli_query($conn,$sql);
    if ($query==1) {
        echo "<script>alert('Product Deleted')</script>";
        redirectPage(SITE_ADM_MOD.'manageproduct-nct/');
    }
}
if(isset($_GET['deleteuser'])){
    $deleteuser = $_GET['deleteuser'];
    /*delete query*/
    mysqli_connect("localhost","root","","markethub");
    $sql = "DELETE FROM register_users WHERE u_id='$deleteuser'";
    $query= mysqli_query($conn,$sql);
    if ($query==1) {
        echo "<script>alert('User Deleted')</script>";
        redirectPage(SITE_ADM_MOD.'manageuser-nct/');
    }
}
if(isset($_GET['deleteimage'])){
    $deleteimage = $_GET['deleteimage'];
    /*delete query*/
    mysqli_connect("localhost","root","","markethub");
    $sql = "DELETE FROM tbl_slider WHERE id='$deleteimage'";
    $query= mysqli_query($conn,$sql);
    if ($query==1) {
        echo "<script>alert('Image Deleted')</script>";
        redirectPage(SITE_ADM_MOD.'manageslider-nct/');
    }
}
?>