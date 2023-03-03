<?php
    
    $host = "localhost";
    $dbUsername = "Jalpriya";
    $dbPassword = "jalpriya";
    $dbname = "chaperone";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if($conn->connect_error){
            die("Connection Failed ");
        
        }

// Include the database configuration file  

// include "image_insert.php";

// If file upload form is submitted 

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $password = $_POST['pass'];
    $imgContent = $_POST['profile'];

    
     $sql ="INSERT INTO `user_details`(`Name`, `Email`, `Phone`, `City`,`Pass`,`Profile`) VALUES ('$name', '$email', '$phone', '$city','$password','$imgContent')";
    
    if($conn->query($sql)==True)
    {
        // echo "new record added";
    }
    else{
        echo "Error";
    }
// ----------------------------------------------displaying yoir profile----------------------------
$sql = "SELECT * FROM `user_details` WHERE `Email`= '$email'";
$result = mysqli_query($conn, $sql);

$num= mysqli_num_rows($result);
if($num> 0){
    while($row=mysqli_fetch_assoc($result)){
        
        //  $_SESSION['fetched_Name'] = $row['Name'];
        session_start();
        $Name = $_SESSION["Name"] = $row['Name'];
        $City = $_SESSION["City"] = $row['City'];
        $Phone = $_SESSION["Phone"] = $row['Phone'];
        $Email = $_SESSION["Email"] = $row['Email'];
        $Profile = $_SESSION["Profile"] = $row['Profile'];
        

    }

    echo $Name;
      echo "<script> window.location.assign('home_li.html'); </script>";
}

    $conn->close();
?>