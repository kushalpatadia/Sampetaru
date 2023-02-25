<?php
$curent_geoLoc = (unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])));
            echo '<pre>';
            print_r($curent_geoLoc);

            ?>