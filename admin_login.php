<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="admin_login.css">
</head>
<body>
    <div class="header">
    <img src="logo.svg" id="mm">
    <span id="home"><a href ="home.html">Home</a></span></div>
    <div id="block"><span id="student">Admin Login</span></div>
    <form action="admin_login.php" method="post">
        <span id="form">Email</span>&nbsp;&nbsp;<input type="email" name="email" id="name"><br><br>
       <span id="pass">Password</span>&nbsp;&nbsp;<input type="password" name="password" id="name1"><br><br></div>
      <input type="submit" id="submit" value="Login">
   
<?php
    $server = "localhost";
    $usernam = "root";
    $password = "";
    error_reporting(E_ERROR | E_PARSE);

    $con = mysqli_connect($server, $usernam, $password, "admin_data");
    $email  = $_POST["email"];
    $password = $_POST["password"];
    if (isset($_POST["email"])) {
        $sql2 = "SELECT * FROM `signup_admin`";
        $result = mysqli_query($con, $sql2);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["email"] == $email && $row["password"] == $password) {
                $sql10 = "UPDATE `signup_admin` SET `login`=1 WHERE `email`='$email'";
                echo "succesful log in";
                if($con->query($sql10)==true){
                    header("Location:admin_dashboard.php");
                }
            else{
                echo "unsuccessful";
            }

            }

        }
    }
    ?>
     </form>
    <span id="signup">Don't have an account? <b><a href="http://localhost:4000/FRVIT/admin_signup.php">SignUp</a></b></span>
</body>
</html>