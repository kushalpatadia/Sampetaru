<?php
$module = 'demo-nct';
require_once "../../includes-nct/config-nct.php";
require_once "class.demo-nct.php";


extract($_REQUEST);

$winTitle = 'Demo';

$headTitle = 'Demo';
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle /*, "author" => AUTHOR*/));


$obj = new Demo($module, 0, issetor($token));
$pageContent = $obj->getPageContent();

require_once DIR_TMPL . "parsing-nct.tpl.php";
?>