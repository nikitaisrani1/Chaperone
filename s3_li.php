<?php
    //----------------------------------------------connection--------------------------------------- 
    $host = "localhost";
    $dbUsername = "Jalpriya";
    $dbPassword = "jalpriya";
    $dbname = "chaperone";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if($conn->connect_error){
            die("Connection Failed ");
        }
// ----------------------------------------------------insert data in database-----------------------------------------
    $s3_age = $_POST['age'];
    $s3_region = $_POST['region'];
    $s3_gender = $_POST['gender'];
    $s3_date = $_POST['date'];
    $s3_time = $_POST['time'];
    $s3_payment = $_POST['payment'];
    $s3_purpose = $_POST['purpose'];

     $sql ="INSERT INTO `nanny_for_kids`(`Age`, `Region`, `Gender`, `Date`,`Slot`,`Purpose`,`Payment`) VALUES ('$s3_age', '$s3_region', '$s3_gender', '$s3_date','$s3_time','$s3_purpose','$s3_payment')";
    
    if($conn->query($sql)==True){
        
    }
    else{
        echo "Error";
    }

    
// ----------------------------------------------------data retreival---------------------------------------

$sql = "SELECT * FROM `employee_details` WHERE `Region`= '$s3_region' and `Specialization`='nanny'";
$result = mysqli_query($conn, $sql);

$num= mysqli_num_rows($result);
if($num> 0){
    while($row=mysqli_fetch_assoc($result)){
        //  $_SESSION['fetched_Name'] = $row['Name'];
        session_start();
        $Name = $_SESSION["Name"] = $row['Name'];
        $Age = $_SESSION["Age"] = $row['Age'];
        $Gender = $_SESSION["Gender"] = $row['Gender'];
        $Experience = $_SESSION["Experience"] = $row['Experience'];
    }

    echo $Name;
    // echo "<script> window.location.assign('book_li.php'); </script>";
}
    

?>