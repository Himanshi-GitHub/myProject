<?php
include("config.php");
 
if(isset($_POST['but_upload'])){
   $maxsize = 5242880; // 5MB
   if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
       $name = $_FILES['file']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($extension,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
             $_SESSION['message'] = "File too large. File must be less than 5MB.";
          }else{
             // Upload
             if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
               // Insert record
               $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";

               mysqli_query($con,$query);
               $_SESSION['message'] = "Upload successfully.";
               
             }
          }

       }else{
          $_SESSION['message'] = "Invalid file extension.";
       }
   }else{
       $_SESSION['message'] = "Please select a file.";
   }
   header('location: upload.php');
   exit;
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>VSite</h2>
        <ul>
            <li><a href="admin_portal.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="profile.php"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="upload.php"><i class="fas fa-upload"></i>Upload</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header"> upload videos </div>  
        <div class="info">
            
            <div class=" container bg-light p-5 m-5 ">
                <form class="border border-dark " method="post" action="" enctype='multipart/form-data'>
                <div class="p-3 ms-5 ">
                <input class="" type='file'  id="file" name='file' />
                </div>
                <div class="p-3 ms-5 ">
                <input type='submit' value='Upload' name='but_upload'>
                </div>
                </form>
            </div>

            <div style="background-color: white;">
            <?php 
            if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            }
            ?>
            </div>


        </div>
    </div>
</div>

</body>