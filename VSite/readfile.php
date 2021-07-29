<?php
include("config.php");
?>
<!doctype html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Upload and Store video to MySQL Database with PHP</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="imgs/audio.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      VideoApp
    </a>
    
    <h1></h1>
    <button type="button" id="Button" class="btn btn-light">back</button>
    <script type="text/javascript">
            document.getElementById("Button").onclick = function () {
                location.href = "welcome.php";
            };
    </script>
  </div>
</nav>
    <div>
 
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