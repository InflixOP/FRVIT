<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="admin_signup.css">
</head>
<body>
    <div class="header">
        <img src="logo.svg" id="mm">
        <span id="home"><a href ="home.html">Home</a></span></div>
        <div id="block"><span id="student">Admin Signup</span></div>
        <form action="admin_signup.php" method="post">
            <span id="form">Name</span>&nbsp;&nbsp;<input type="text" name="name" id="name"><br><br>
            <span id="form1">Password</span>&nbsp;&nbsp;<input type="password" name="password" id="name2"><br><br>
           <span id="pass">Email</span>&nbsp;&nbsp;<input type="text" name="email" id="name1"><br><br>
           <span id="pass1">Block</span>
           <span id="mo">Mobile no</span>&nbsp;&nbsp;<input type="number" name="mobile" id="mmm"><br><br>
           <select name="hostel" id="hostel">
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

        $con = mysqli_connect($server, $username, $password, "admin_data");
        $name = $_POST["name"];
        $email = $_POST["email"];
        $hostel = $_POST["hostel"];
        $mobile = $_POST["mobile"];
        $password = $_POST["password"];
        if (isset($_POST["name"])) {
            $vit=substr($email,-9,strlen($email));
            if (strcmp($vit,'vit.ac.in')==0){
            $sql1 = "INSERT INTO `signup_admin`(`name`,`email`,`block`,`mobile`,`password`) VALUES('$name','$email','$hostel','$mobile','$password');";  
            $sql3 = "CREATE TABLE IF NOT EXISTS $hostel(`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,`name` VARCHAR(18) NOT NULL,`regno` VARCHAR(9) NOT NULL,`room` VARCHAR(5) NOT NULL,`complain` VARCHAR(18) NOT NULL ,`time` 	timestamp NOT NULL,`status` VARCHAR(20))";
                $result1 = mysqli_query($con, $sql3);
            if ($con->query($sql1) == true)  {
                header("Location:admin_login.php");
                }
            else {
                echo "ERROR: $sql1 <br> $con->error";
            }
        }
    else{
        echo "Invalid Mail ID";
    }
    }
        ?>
</body>

</html>