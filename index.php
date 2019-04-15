<?php 
include_once 'proses/config.php'; // include site configurasi
include_once 'proses/connection.php'; // include database configurasi
include_once 'header.php'; // include header website

// ==== Routing Page Website ======
if(file_exists('page/'.$page.$action)){
include_once 'page/'.$page.$action;
}else{
   echo '<script>window.location.href = "'.$site_url.'/404.php";</script>';
}

// == End Routing Website ==

include_once 'footer.php'; // include footer website
