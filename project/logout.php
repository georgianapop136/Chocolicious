<?php

include 'config.php';
$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');

session_start();
session_unset();
session_destroy();

header('location:login.php');

?>