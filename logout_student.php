<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$dbname = "student_data";
$con = mysqli_connect($server, $username, $password, $dbname);
$regno = $_SESSION['regno'];
$sql = "UPDATE `signup_student` SET `login`=0 WHERE `login`=1";
$result = mysqli_query($con, $sql);

session_destroy();
header("Location: home.html");
exit();
?>
