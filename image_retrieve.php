<?php 
// Include the database configuration file  
 
    $host = "localhost";
    $dbUsername = "Jalpriya";
    $dbPassword = "jalpriya";
    $dbname = "chaperone";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if($conn->connect_error){
            die("Connection Failed ");
        
        }

// Get image data from database 
$result ="SELECT `Profile` FROM `user_details` ORDER BY userID DESC"; 


 if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Profile']); ?>" /> 
        <?php } ?> 
    </div> 
 }else{
    <p class="status error">Image(s) not found...</p> 
?>