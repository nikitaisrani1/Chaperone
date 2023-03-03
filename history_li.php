<?php

    // <include "s1_li.php"></include>
    $host = "localhost";
    $dbUsername = "Jalpriya";
    $dbPassword = "jalpriya";
    $dbname = "chaperone";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if($conn->connect_error){
            die("Connection Failed ");
        
        }
// -------------------------------------------------fetch eid and uid-------------------------------------
$result = mysql_query("SELECT userID FROM user_details WHERE userID ='".$_SESSION['UserID']."'");
$row = mysql_fetch_array($result);
$uid = $row['UserID'];
echo $uid; 

$result = mysql_query("SELECT E_id FROM employee_details WHERE E_id ='".$_SESSION['EmployeeID']."'");
$row = mysql_fetch_array($result);
$eid = $row['UserID'];
echo $eid; 

//         $sql ="INSERT INTO `booked_services`(`User_ID`, `Employee_ID`, `Name`, `Specialization``Date`,`Time`,`Region`) 
//         VALUES ('$s3_age', '$s3_region', '$s3_gender', '$s3_date','$s3_time','$s3_purpose','$s3_payment')";
    
// sql = "SELECT userID FROM `user_details` WHERE ``= '$s3_region' and `Specialization`='nanny'";
// $result = mysqli_query($conn, $sql);

// $num= mysqli_num_rows($result);
// if($num> 0){
//     while($row=mysqli_fetch_assoc($result)){
//         //  $_SESSION['fetched_Name'] = $row['Name'];
//         session_start();
//         $Name = $_SESSION["Name"] = $row['Name'];
//         $Age = $_SESSION["Age"] = $row['Age'];
//         $Gender = $_SESSION["Gender"] = $row['Gender'];
//         $Experience = $_SESSION["Experience"] = $row['Experience'];
//     }
       
