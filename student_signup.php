<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="student_signup.css">
</head>
<body>
    <div class="header">
        <img src="logo.svg" id="mm">
        <span id="home"><a href ="home.html">Home</a></span></div>
        <div id="block"><span id="student">Student Signup</span></div>
        <form action="" method="post">
            <span id="form">Name</span>&nbsp;&nbsp;<input type="text" name="name" id="name"><br><br>
            <span id="form1">VIT Email</span>&nbsp;&nbsp;<input type="text" name="email" id="name2"><br><br>
           <span id="pass">Registration No.</span>&nbsp;&nbsp;<input type="text" name="regno" id="name1"><br><br>
           <span id="pass1">Password</span>&nbsp;&nbsp;<input type="password" name="password" id="na"><br><br>
           <span id="momo">Mobile no</span>&nbsp;&nbsp;<input type="number" name="mobile" id="momo1"><br><br>    
           <span id="zzz">Room no</span>&nbsp;&nbsp;<input type="number" name="room" id="room"><br><br>
            <span id="mo">Block</span>
            <select name="hostel" id="mmm">
                <option value="none" selected disabled hidden >Select an Option</option>
                <option value="M_P">M_P</option>
                <option value="M_Q">M_Q</option>
                <option value="W_C">W_C</option>
                <option value="W_E">W_E</option></div>
            <input type="submit" id="submit" value="Signup">   
           
        </form>
        <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        error_reporting(E_ERROR | E_PARSE);

        $con = mysqli_connect($server, $username, $password, "student_data");
        $name = $_POST["name"];
        $regno= $_POST["regno"];
        $email = $_POST["email"];
        $hostel = $_POST["hostel"];
        $room=$_POST["room"];
        $mobile = $_POST["mobile"];
        $password = $_POST["password"];
        if (isset($_POST["name"])) {
            $vit=substr($email,-16,strlen($email));
            if (strcmp($vit,'vitstudent.ac.in')==0){
            $sql1 = "INSERT INTO `signup_student`(`name`,`regno`,`email`,`block`,`room`,`mobile`,`password`) VALUES('$name','$regno','$email','$hostel','$room','$mobile','$password');";  
            if ($con->query($sql1) == true) {
                $sql3 = "CREATE TABLE IF NOT EXISTS $regno(`complain` VARCHAR(18) NOT NULL ,`time` 	timestamp NOT NULL,`status` VARCHAR(20))";
                $result1 = mysqli_query($con, $sql3);
                if ($con->query($sql3) == true) {
                header("Location:student_login.php");
                }
            } else {
                echo "ERROR: $sql1 <br> $con->error";
            }}else{
                echo "Invalid Mail ID";
            }}

        
        ?>
</body>

</html>