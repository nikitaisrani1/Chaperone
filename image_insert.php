<?php
    
$host = "localhost";
$dbUsername = "Jalpriya";
$dbPassword = "jalpriya";
$dbname = "chaperone";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if($conn->connect_error){
        die("Connection Failed ");
    
    }

error_reporting(0);
 
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST['profile'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/" . $filename;
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO image (filename) VALUES ('$filename')";
 
    // Execute query
    mysqli_query($conn ,$sql);
 
    // Now let's
if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>