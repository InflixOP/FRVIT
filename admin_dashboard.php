<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash</title>
    <link rel="stylesheet" href="admin_dashboard.css">
</head>
<body>
    <div class="header">
        <img src="logo.svg" id="mm">
        <span id="home"><a href ="logout_admin.php">Logout</a></span>
        <span id="history"><a href ="admin_history.php">History</a></span>
    <table id="admin">
        <tr>
            <td></td>
        </tr>
         <?php
         $server = "localhost";
         $usernam = "root";
         $password = "";
         error_reporting(E_ERROR | E_PARSE);

         $con = mysqli_connect($server, $usernam, $password, "admin_data");
         $sql6 = "SELECT * FROM `signup_admin` WHERE `login`=1";
         $result4 = mysqli_query($con, $sql6);
         while ($row = mysqli_fetch_assoc($result4)) {
             echo "
       <tr>
       <td>" . $row["name"] . "</td>";
         }
        ?>
    </table></div>
    <span id="hey"><H1>Pending  Requests</H1></span>
    <table id="request">
        <tr>
            <td class="a1" class="t1">Name</td>
            <td class="a1" class="t2">Reg No.</td>
            <td class="a1" class="t3">Room no</td>
            <td class="a1" class="t4">Complain</td>
            <td class="a1" class="t5">Time</td>
            <td class="a1" class="t6">Action</td>


            <?php
        $server = "localhost";
        $username = "root";
        $password = "";
        error_reporting(E_ERROR | E_PARSE);

        $con = mysqli_connect($server, $username, $password, "admin_data");
        echo "<br>";
   
            $sql5 = "SELECT `block` FROM `signup_admin` WHERE `login`=1 ";
            $result3 = mysqli_query($con, $sql5);
            while ($row = mysqli_fetch_assoc($result3)) {
                $hostel=$row["block"];
                $sql="SELECT * FROM $hostel WHERE `status`='Pending'";

                $result=mysqli_query($con,$sql);
                while ($row1 = mysqli_fetch_assoc($result)){
                    $drop = '<a href="admin_dashboard.php?id=' . $row1['id'] . '">Done</a>';

                echo "
                    <tr>
                        <td>" . $row1["name"] . "</td>
                        <td>".$row1["regno"]."</td>
                        <td>" . $row1["room"] . "</td>
                        <td>" . $row1["complain"] . "</td>
                        <td>" . $row1["time"] . "</td>
                        <td>". $drop."</td>
                    </tr>";
                    
                }
                
        }
            
        ?>
<?php

if (isset($_GET['id'])) {
    echo $_GET['id'];
    $con = mysqli_connect("localhost", "root", "");
    $id = mysqli_real_escape_string($con, $_GET['id']);
    $sql="SELECT * FROM `admin_data`.`$hostel` where `id`='$id'";
    $result3 = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result3)) {
        $time=$row["time"];
        $regno=$row["regno"];
        $sql3="UPDATE `student_data`.`$regno` SET status='Completed' WHERE `time`='$time'";
        mysqli_query($con, $sql3);
    }
    $sql6 = "UPDATE `admin_data`.`$hostel` SET status='Completed' WHERE `id`='$id'";
    mysqli_query($con, $sql6);
    header("Location: admin_dashboard.php");
}
    
              


?>
          </tr>
    </table>
</body>
</html>