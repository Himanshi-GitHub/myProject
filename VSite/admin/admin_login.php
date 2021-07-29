<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style_admin_login.css">



    <title>Admin Login</title>
</head>
<body>
    
<nav class="nav1" >
       <h1>Admin Login</h1>
    </nav>
    
    

    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" >Login</button>
            </div>
            
            <form id="login" action="connection.php" method="post" class="input-group">
                <input type="text" class="input-field" name="admin_id" placeholder="Admin Id" required>
                <input type="text" class="input-field" name="password" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box" required>
                <span>Remember Password</span>
                <button type="submit" class="submit-btn">Login</button>
                
            </form>
            
        </div>
        
    </div>

    <div class="message">
    <?php 
    if(isset($_SESSION['message'])){
       echo '<script>alert("Incorrect Admin Id or Password!")</script>';
       
       unset($_SESSION['message']);
    }
    ?>
    </div>
    


</body>
</html>