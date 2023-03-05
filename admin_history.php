<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash</title>
    <link rel="stylesheet" href="admin_history.css">
</head>
<body>
    <div class="header">
        <img src="logo.svg" id="mm">
        <span id="home"><a href ="logout_admin.php">Logout</a></span>
        <span id="history"><a href ="admin_dashboard.php">Home</a></span>
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
    <span id="hey"><H1>History</H1></span>
    <table id="request">
        <tr>
            <td class="a1" class="t1">Name</td>
            <td class="a1" class="t2">Reg No.</td>
            <td class="a1" class="t3">Room no</td>
            <td class="a1" class="t4">Complain</td>
            <td class="a1" class="t5">Time</td>
            <td class="a1" class="t6">Action</td>
        </tr>
    
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
                $sql="SELECT * FROM $hostel WHERE `status`='completed'";

                $result=mysqli_query($con,$sql);
                while ($row1 = mysqli_fetch_assoc($result)){

                echo "
                    <tr>
                        <td>" . $row1["name"] . "</td>
                        <td>" . $row1["regno"] . "</td>
                        <td>" . $row1["room"] . "</td>
                        <td>" . $row1["complain"] . "</td>
                        <td>" . $row1["time"] . "</td>
                        <td>" . $row1["status"] . "</td>
                        
                    
                    </tr>";}
            }
            
        ?>
      </table>
</body>
</html>