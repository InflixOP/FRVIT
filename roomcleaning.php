<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enterpassword</title>
    <link rel="stylesheet" href="roomcleaning.css">
</head>
<body>
    
    <img id="logo"
    src="logo.svg" alt="">
    <div id="topblock">
    <span><a href="student_dashboard.php" id="homee" class="a">Home</a></span>
    <span><a href="logout_student.php" id="logoutt" class="a">Logout</a></span>
</div>
<div id="box" >
    <span id="heading"> <p><strong>Are you Sure?</strong></p> </span>
</div>
<form action="roomcleaning.php" method="post">
<input type="submit" class="con" value="Confirm" name="confirm">
</form>
<button class="con" id="back" ><a href = "student_dashboard.php">Back</a></button>

<?php
    $server = "localhost";
    $usernam = "root";
    $password = "";
    error_reporting(E_ERROR | E_PARSE);
    $confirm=$_POST["confirm"];
    if (isset($_POST["confirm"])){
    $con = mysqli_connect($server, $usernam, $password);
        $sql2 = "SELECT * FROM `student_data`.`signup_student` WHERE `login`=1";
        $result = mysqli_query($con, $sql2);
        while ($row = mysqli_fetch_assoc($result)) {
        
            $regno=$row["regno"];
            $hostel=$row["block"];
            $name=$row["name"];
            $room=$row["room"];
            $sql1="INSERT INTO `student_data`.`$regno` (`complain`,`status`) VALUES('Room Cleaning','Pending')";
            
            
                if ($con->query($sql1) == true) {
                $sql3="INSERT INTO `admin_data`.`$hostel` (`name`,`regno`,`room`,`complain`,`status`) VALUES('$name','$regno','$room','Room Cleaning','Pending')";
                if ($con->query($sql3) == true) {
                   header("Location:student_dashboard.php");
            }
            else {
               echo "ERROR: $sql3 <br> $con->error";
            }}}}

        
    ?>

</body>
</html>