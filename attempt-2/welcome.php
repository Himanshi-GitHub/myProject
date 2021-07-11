
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
   header('location: welcome.php');
   exit;
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   
    <title>Welcome Page</title>

</head>
<body background="imgs/fruits.jpg">

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="imgs/audio.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      VideoApp
    </a>
    <span class="navbar-text text-light">
       <h2> Welcome <?php echo $_SESSION['user_name']; ?>!</h2>
    </span>
    
    <h1></h1>
    <button type="button" id="Button" class="btn btn-light">Log Out</button>
    <script type="text/javascript">
            document.getElementById("Button").onclick = function () {
                location.href = "logout.php";
            };
    </script>
  </div>
</nav>

<!-- <div class="row g-3">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
</div> -->
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

    <button id="myButton" style="display:block; padding:2px; margin:auto" class="float-left submit-button" >Watch Videos</button>

    <script type="text/javascript">
        document.getElementById("myButton").onclick = function () {
            location.href = "readfile.php";
        };
    </script>

    <!--<h1>Welcome <?php //echo $_SESSION['user_name']; ?></h1>-->
</body>
</html>
