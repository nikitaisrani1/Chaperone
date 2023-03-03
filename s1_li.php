<?php
    
    $host = "localhost";
    $dbUsername = "Jalpriya";
    $dbPassword = "jalpriya";
    $dbname = "chaperone";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if($conn->connect_error){
            die("Connection Failed ");
        
        }

    $purpose = $_POST['purpose'];
    $region = $_POST['region'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $payment = $_POST['payment'];

    
     $sql ="INSERT INTO `elderly_help`(`Purpose`, `Region`, `Gender`, `Date`,`Time`,`Payment`) VALUES ('$purpose', '$region', '$gender', '$date','$time','$payment')";
    
    if($conn->query($sql)==True)
    {
        // echo "new record added";
        // echo "<script> window.location.assign('book_li.php'); </script>";
    }
    else{
        echo "Error";
    }

    
// --------------------------------data retreival-------------

$sql = "SELECT * FROM `employee_details` WHERE `Region`= '$region' and `Gender`= '$gender' and `Specialization`='companion'";
$result = mysqli_query($conn, $sql);

$num= mysqli_num_rows($result);
$fetched_Name;
if($num> 0){
    while($row=mysqli_fetch_assoc($result)){

        
         $_SESSION['fetched_Name'] = $row['Name'];


        // $fetched_Name=$row['Name'];
        // $fetched_Age=$row['Age'];
        // $fetched_Gender=$row['Gender'];
        // $fetched_Experience=$row['Experience'];
        echo"<br>";
        session_start();
        
        $Name = $_SESSION["Name"] = $row['Name'];
        $Age = $_SESSION["Age"] = $row['Age'];
        $Gender = $_SESSION["Gender"] = $row['Gender'];
        $Experience = $_SESSION["Experience"] = $row['Experience'];

        
    }
    echo"<br>";

    
    // header("Location: book_li.php?Name=".$fetched_Name);
    // header("location:book_li.php?Name=$fetched_Name, Age=$fetched_Age");
    echo "<script> window.location.assign('book_li.php'); </script>";
}
    
// echo $fetched_Name,$fetched_Age,$fetched_Experience;
?>