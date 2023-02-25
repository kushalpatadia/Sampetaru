<?php
$module = 'demo2-nct';
require_once "../../includes-nct/config-nct.php";
require_once "class.demo2-nct.php";


extract($_REQUEST);

$winTitle = 'Demo2';

$headTitle = 'Demo2';
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle /*, "author" => AUTHOR*/));


$obj = new Demo2($module, 0, issetor($token));
$pageContent = $obj->getPageContent();

require_once DIR_TMPL . "parsing-nct.tpl.php";
?>