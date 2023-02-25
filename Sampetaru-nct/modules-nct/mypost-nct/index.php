<?php
$module = 'mypost-nct';
require_once "../../includes-nct/config-nct.php";
require_once "class.mypost-nct.php";


extract($_REQUEST);

$winTitle = 'My Post';

$headTitle = 'My Post';
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle /*, "author" => AUTHOR*/));

if (isset($_POST['btnupdate'])) {
	$hiddenvariable = $_POST['hiddenvariable'];
	$from_city = $_POST['from_city'];
	$end = $_POST['end'];
	$StartDate = $_POST['StartDate'];
	$EndDate = $_POST['EndDate'];
	$travellingradio = $_POST['travellingradio'];
	$stop1 = $_POST['stop1'];
	$stop2 = $_POST['stop2'];
	$stop3 = $_POST['stop3'];
	$eStartTime = $_POST['eStartTime'];
	$eEndTime = $_POST['eEndTime'];
	$eWeight = $_POST['eWeight'];
	if ($travellingradio == null) {
		$update = "UPDATE `tbl_posts` SET `l_start`='$',`l_end`='$',`d_start`='$',`d_end`='$',`stop1`='$',`stop2`='$',`stop3`='$',`e_start_time`='$',`e_end_time`='$',`e_weight`='$' WHERE 1";
	}
	else
	{
		$update = "UPDATE `tbl_posts` SET `l_start`='$',`l_end`='$',`d_start`='$',`d_end`='$',`transportation`='$',`stop1`='$',`stop2`='$',`stop3`='$',`e_start_time`='$',`e_end_time`='$',`e_weight`='$' WHERE 1";
	}
}

$obj = new MyPost($module, 0, issetor($token));
$pageContent = $obj->getPageContent();

require_once DIR_TMPL . "parsing-nct.tpl.php";
?>