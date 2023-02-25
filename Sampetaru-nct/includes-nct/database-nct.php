<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "sampetaru");
    define("PROJECT_DIRECTORY_NAME", "Sampetaru");

    define('SITE_URL', 'http://' . $_SERVER["SERVER_NAME"] . '/Sampetaru/');
    define('ADMIN_URL', SITE_URL . 'admin-nct/');
    define('DIR_URL', $_SERVER["DOCUMENT_ROOT"] . '/Sampetaru/');

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);