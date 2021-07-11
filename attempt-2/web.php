<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    
    <title>My Website</title>
</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <img src="imgs/audio.png" alt="VideoApp" srcset="">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#our-services">Services</a></li>
            <li class="item"><a href="#">About us</a></li>
            <li class="item"><a href="#">Explore</a>
                <ul>
                    <li class="items"><a href="#">Trending</a></li>
                    <li class="items"><a href="#">Music</a></li>
                    <li class="items"><a href="#">Gaming</a></li>
                    <li class="items"><a href="#">News</a></li>
                    <li class="items"><a href="#">Movies</a></li>
                    <li class="items"><a href="#">Fashion & Beauty</a></li>
                    <li class="items"><a href="#">Learning</a></li>
                    <li class="items"><a href="#">Sports</a></li>
        
                </ul>
            </li>
            <li class="item"><a href="#feedback">Feedback</a></li>

        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to VideoApp</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur explicabo odio quo nostrum beatae. In est eius, dolor commodi architecto necessitatibus obcaecati unde cum perferendis voluptates rem eos doloribus similique!</p>
        
        <button id="myButton" class="btn">Get Started</button>
        <script type="text/javascript">
            document.getElementById("myButton").onclick = function () {
                location.href = "index.php";
            };
        </script>
    </section>

    <section id="our-services" class="services-container">
            <h1 id="h1" class="h-primary center">Our services</h1>
            <div id="services">
                <div class="box">
                    <img src="imgs/iphone-1836071_1920.jpg" alt="">
                    <h2 class="h-secondary center">Create Videos</h2>
                    <p class="center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, autem modi! Soluta repudiandae expedita dicta cumque exercitationem nobis nostrum fuga.</p>

                </div>
                <div class="box">
                    <img src="imgs/headphones.jpg" alt="">
                    <h2 class="h-secondary center">Upload Videos</h2>
                    <p class="center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, autem modi! Soluta repudiandae expedita dicta cumque exercitationem nobis nostrum fuga.</p>

                </div><div class="box">
                    <img src="imgs/playbuttons.png" alt="" >
                    <h2 class="h-secondary center">Watch Videos</h2>
                    <p class="center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, autem modi! Soluta repudiandae expedita dicta cumque exercitationem nobis nostrum fuga.</p>

                </div>
            </div>
    </section>
    <section id="client-section">
        <h1 class="h-primary center">Our Clients</h1>
        <div id="clients">
            <div class="client-item">
                <img src="imgs/1.png" alt="Apple" srcset="">
            </div>
            <div class="client-item">
                <img src="imgs/2.png" alt="Apple" srcset="">
            </div><div class="client-item">
                <img src="imgs/3.png" alt="Apple" srcset="">
            </div><div class="client-item">
                <img src="imgs/4.png" alt="Apple" srcset="">
            </div>
        </div>>
    </section>
    <section id="feedback">
        <h1 class="h-primary center">Feedback</h1>
        <div id="feedback-box">
            <form action="">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="name" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="name" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <script>
                    function showAlert() {
                        alert ("Thank you!");
                    }
                </script>
                <div><button type="submit" class="button" onclick="showAlert()">Submit</button></div>
            </form>
        </div>
    </section>
    <footer>
        <div class="center">
            Copyright &copy; www.VideoApp.com. All rights reserved!
        </div>
    </footer>
    
</body>
</html>                     