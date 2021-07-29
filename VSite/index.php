<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style_index.css">



    <title>Register & Login</title>
</head>
<body>
    
<nav class="nav1" >
        <div id="logo1">
            <img src="imgs/audio.png" alt="VideoApp" srcset="" style="height: 59px; margin:2px;">
        </div>
        <ul >
            <li class="item" >
            <button id="myButton" class="btn" >Back</button>
                <script type="text/javascript">
                document.getElementById("myButton").onclick = function () {
                    location.href = "home.html";
                };
                </script>
            </li>
            
        </ul>
    </nav>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn"onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="imgs/fb.png">
                <img src="imgs/google.png">
                <img src="imgs/twitter.png">

            </div>
            <form id="login" action="validation.php" method="post" class="input-group">
                <input type="text" class="input-field" name="user_id" placeholder="User Id" required>
                <input type="text" class="input-field" name="password" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box" required>
                <span>Remember Password</span>
                <button type="submit" class="submit-btn">Login</button>
                
            </form>
            <form id="register" action="registration.php" method="post" class="input-group">
                <input type="text" class="input-field" name="user_id" placeholder="User Id" required>
                <input type="text" class="input-field" name="user_name" placeholder="Name" required>
                <input type="text" class="input-field" name="password" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box" required>
                <span>I agree to the terms and conditions</span>
                <button type="submit" class="submit-btn">Register</button>
                
            </form>
        </div>
        
    </div>

<script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");
    
    function register(){
        x.style.left = "-400px"
        y.style.left = "50px"
        z.style.left = "110px"
    }

    function login(){
        x.style.left = "50px"
        y.style.left = "450px"
        z.style.left = "0px"
    }


</script>

</body>
</html>