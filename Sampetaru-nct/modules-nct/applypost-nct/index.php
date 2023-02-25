<?php
$module = 'applypost-nct';
require_once "../../includes-nct/config-nct.php";
require_once "class.applypost-nct.php";

$winTitle = 'Post Me';
$headTitle = 'Post Me';
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle /*, "author" => AUTHOR*/));


extract($_REQUEST);

$pickup = $_GET['pickup'];
$pickoff = $_GET['pickoff'];
$date1 = $_GET['date1'];
$date2 = $_GET['date2'];

if (isset($_POST['post'])) {
	$pickup = $_POST['from_city'];
	$pickoff = $_POST['end'];
	$date1 = $_POST['StartDate'];
	$date2 = $_POST['EndDate'];
	$travelling = $_POST['travellingradio'];
	$stop1 = $_POST['stop1'];
	$stop2 = $_POST['stop2'];
	$stop3 = $_POST['stop3'];
	$eStartTime = $_POST['eStartTime'];
	$eEndTime = $_POST['eEndTime'];
	$eWeight = $_POST['eWeight'];
	$userid = $_SESSION['userid'];
	$date = date('Y-m-d H:i:s');
	$ip = $_SERVER['REMOTE_ADDR'];
	// echo $userid;
	$insert = "INSERT INTO `tbl_posts`(`u_id`, `l_start`, `l_end`, `d_start`, `d_end`, `transportation`, `stop1`, `stop2`, `stop3`, `e_start_time`, `e_end_time`, `e_weight`, `p_time`, `p_ip`) VALUES ('$userid','$pickup','$pickoff','$date1','$date2','$travelling','$stop1','$stop2','$stop3','$eStartTime','$eEndTime','$eWeight','$date','$ip')";
	echo $insert;
	$result = mysqli_query($conn,$insert);
	redirectPage(SITE_URL);
}

// echo $pickup."<br>".$pickoff."<br>".$date1."<br>".$date2;
$obj = new ApplyPost($module, 0, issetor($token));
$pageContent = $obj->getPageContent();

require_once DIR_TMPL . "parsing-nct.tpl.php";
?>