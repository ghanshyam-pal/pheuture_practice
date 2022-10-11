<?php
session_start();
$name=$_SESSION['name'];
$pass=$_SESSION['pass'];
$age=$_SESSION['age'];
$email=$_SESSION['email'];
$gender=$_SESSION['gender'];
$country=$_SESSION['country'];
$filepath=$_SESSION['filep'];
$filename=$_SESSION['filen'];
include_once('./table.php');
session_destroy();

?>
