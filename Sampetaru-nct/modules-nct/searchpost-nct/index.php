<?php
$module = 'searchpost-nct';
require_once "../../includes-nct/config-nct.php";
require_once "class.searchpost-nct.php";


extract($_REQUEST);

$winTitle = 'Search Post';

$headTitle = 'Search Post';
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle /*, "author" => AUTHOR*/));


$obj = new SearchPost($module, 0, issetor($token));
$pageContent = $obj->getPageContent();

require_once DIR_TMPL . "parsing-nct.tpl.php";
?>