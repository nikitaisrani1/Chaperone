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

 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST['profile'])){ 
    $status = 'error'; 
    if(!empty($_POST['profile']['name'])) { 
        // Get file info 
        $fileName = basename($_POST['profile']['name']); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_POST['profile']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $db->query("INSERT into user_details (`Profile`) VALUES ('$imgContent', NOW())"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>
