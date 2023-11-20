<?php

$con = mysqli_connect("localhost", "root", "root", "jajji") or die("Error occurred");

session_start();
session_unset();
session_destroy();

header('location:login.php');

?>