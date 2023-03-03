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
    $age = $_POST['age'];
    $region = $_POST['region'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $payment = $_POST['payment'];

     $sql ="INSERT INTO `babysitter`(`Age`, `Region`, `Gender`, `Date`,`Time`,`Payment`) VALUES ('$age', '$region', '$gender', '$date','$time','$payment')";
    
    if($conn->query($sql)==True){
        // echo"new record added";
    }
    else{
        echo "Error";
    }

    
// ----------------------------------------------------data retreival---------------------------------------

$sql = "SELECT * FROM `employee_details` WHERE `Region`= '$region' and `Specialization`='babysitter'";
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