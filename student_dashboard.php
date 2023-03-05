<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="student_dashboard.css">
</head>
<body>
    <div class="header">
        <img src="logo.svg" id="mm">
        <span id="home"><a href ="logout_student.php">Logout</a></span></div>
        <span id="history"><a href="student_history.php">History</a></span></div>
        <span id="hey"><H1>Welcome, </H1></span>
        <table id="aabb">
            <tr>
                <td><b></b></td>
                
            </tr>
            <?php
            $server = "localhost";
            $usernam = "root";
            $password = "";
            error_reporting(E_ERROR | E_PARSE);

            $con = mysqli_connect($server, $usernam, $password, "student_data");
            $sql6 = "SELECT * FROM `signup_student` WHERE `login`=1";
            $result4 = mysqli_query($con, $sql6);
            while ($row = mysqli_fetch_assoc($result4)) {
                echo "
          <tr>
          <td>" . $row["name"] . "</td>
    
         
            </tr>";
            }


            ?>
            
        
        </table>
        <a href="roomcleaning.php"><div id="box1"></div></a><span id="room">Room Cleaning</span>
        <span id="room1">Make room cleaning request from anywhere</span>
        <img src="sweep.svg" id="sweep">
        <a href="electric.php"><div id="box2"></div></a><span id="ele">Electrical</span>
        <span id="ele1">Register electrical complaints</span>
        <img src="4753023_connector_electrical_in_plug_power_icon.svg" id="ele2">
        <a href="furniture.php"><div id="box3"></div></a><span id ="furn">Furniture</span>
        <div id="furn1">Register issues related to beds, mirrors, tables, chairs and so on</div>
        <img src="5854113_computer_desk_education_office_school_icon.svg" id="ppp">
        <a href="others.php"><div id="box4"></div></a><span id="o1">Others</span>
        <span id="o2">Feel free to register other issues related to hostel</span>
        <img src="326565_blank_check_circle_icon.svg" id="oo">
</body>
</html>