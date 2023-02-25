<?php
$module = 'aboutus-nct';
require_once "../../includes-nct/config-nct.php";
require_once "class.aboutus-nct.php";


extract($_REQUEST);

$winTitle = 'About Us';

$headTitle = 'About Us';
$metaTag = getMetaTags(array("description" => $winTitle, "keywords" => $headTitle /*, "author" => AUTHOR*/));

$obj = new Aboutus($module, 0, issetor($token));
$pageContent = $obj->getPageContent();

require_once DIR_TMPL . "parsing-nct.tpl.php";
?>