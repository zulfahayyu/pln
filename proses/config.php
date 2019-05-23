<?php

$site_url = 'http://localhost/pln'; // Base Url website
$site_name = ':: PLN :: Home'; // Website name

// ======= Database Setting ======
$db_server = 'localhost';
$db_name = 'db_pln';
$db_user = 'root';
$db_pass = '';
// == End Database Seting ==

// ======= SMTP Mail Config =========
$MailSetting = array(
    'debug'        =>0,
    'host'         =>'mail.advis.id',
    'smtpauth'     =>true,
    'username'      =>'noreply@advis.id',
    'displayname'  =>'Advis Notification',
    'password'     =>']C@;x=O[62)S',
    'secure'       =>'tls',
    'port'         =>587
);
// == End Mail Config ==========


// ======= Routing URL =============
(!empty($_GET['route'])) ? $route = explode('/', $_GET['route']) : $route = null;
(!empty($route[0])) ? $page = $route[0] . '/' : $page = null;
(!empty($route[1])) ? $action = $route[1] . '.php' : $action = 'home.php';
(!empty($route[2])) ? $id = $route[2] : $id = null;
// == end Routing url ==
