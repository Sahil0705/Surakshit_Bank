<?php
include("conn1.php");
//error_reporting(0);

session_start();
$_SESSION['username'] = $_GET['user'];
header('location:Fund_Transfer.php?use=1');
?>