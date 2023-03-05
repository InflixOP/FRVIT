<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$dbname = "admin_data";
$con = mysqli_connect($server, $username, $password, $dbname);
$sql = "UPDATE `signup_admin` SET `login`=0 WHERE `login`=1";
$result = mysqli_query($con, $sql);

session_destroy();
header("Location: home.html");
exit();
?>
