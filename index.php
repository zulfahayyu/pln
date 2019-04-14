<?php 
include_once 'proses/config.php'; // include site configurasi
include_once 'proses/connection.php'; // include database configurasi
include_once 'header.php'; // include header website

// ==== Routing Page Website ======

include_once 'page/'.$page.$action;

// == End Routing Website ==

include_once 'footer.php'; // include footer website
?>