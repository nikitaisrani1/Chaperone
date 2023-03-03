<?php
$host = "localhost";
$dbUsername = "Jalpriya";
$dbPassword = "jalpriya";
$dbname = "chaperone";

$email = $_POST['email'];
$pass = $_POST['pass'];



$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if($conn->connect_error){
        die("Connection Failed ");
    }
else{
    $stmt=$conn->prepare("select * from user_details where Email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute(); 
     $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows >0){
            $data =$stmt_result->fetch_assoc();
        if($data['Pass']=== $pass)
        {
                // echo"<h2>Login successfully</h2>"; 
                echo "<script> window.location.assign('home_li.html'); </script>";
            }
                
        else{
            echo"<h2>Invalid Email or password</h2>";
        }
        
    }
    else{
        echo"<h2>Invalid Email or password</h2>";
        }

$sql = "SELECT * FROM `user_details` WHERE `Email`= '$email'";
$result = mysqli_query($conn, $sql);

$num= mysqli_num_rows($result);
if($num> 0){
    while($row=mysqli_fetch_assoc($result)){
        
        session_start();
        $Name = $_SESSION["Name"] = $row['Name'];
        $City = $_SESSION["City"] = $row['City'];
        $Phone = $_SESSION["Phone"] = $row['Phone'];
        $Email = $_SESSION["Email"] = $row['Email'];

    }

    // echo $Name;
    echo "<script> window.location.assign('yourprofile_li.php'); </script>";
}

    }
    // $conn->close();
?>