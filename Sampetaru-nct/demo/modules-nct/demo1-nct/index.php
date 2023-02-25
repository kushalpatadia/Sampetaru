<?php
$module = 'demo1-nct';
require_once "../../includes-nct/config-nct.php";
require_once "class.demo1-nct.php";


extract($_REQUEST);

$winTitle = 'Demo1';

$headTitle = 'Demo1';
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle /*, "author" => AUTHOR*/));


$obj = new Demo1($module, 0, issetor($token));
$pageContent = $obj->getPageContent();

require_once DIR_TMPL . "parsing-nct.tpl.php";
?>