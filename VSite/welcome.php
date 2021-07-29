
<?php
include("config.php");

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

<div style = "margin:10px; padding : 5px;">
 
 <?php
 $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
 while($row = mysqli_fetch_assoc($fetchVideos)){
   $location = $row['location'];
   $name = $row['name'];
   echo "<div style='float: left; margin-right: 5px;'>
      <video src='".$location."' controls width='320px' height='320px' ></video>     
      <br>
      <span>".$name."</span>
   </div>";
 }
 ?>

</div>

</body>
</html>
