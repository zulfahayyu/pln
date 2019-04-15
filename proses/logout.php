<?php 
session_start();
unset($_SESSION["nip"]);  
header("Location: ../login.php");
