<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REx Homepage</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="navbar.css"/>
    <link rel="stylesheet" href="index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--    <link rel="shortcut icon" type="image/jpg" href="https://i.ibb.co/z4GxffJ/photo-2-2023-01-30-10-33-02.jpg"/>-->
</head>
<body>
<header>
    <div class="logo">
        <a href="index.php"><img class="logo-img" src="https://i.ibb.co/pWx0ZBM/Rex-2.png" alt=""></a>
    </div>
    <input type="checkbox" id="nav_check" hidden>
    <nav>
        <div class="logo">
            <img class="logo-img" src="https://i.ibb.co/pWx0ZBM/Rex-2.png" alt="">
        </div>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#pharmacies">PHARMACIES</a></li>
            <li><a href="#footer">CONTACT US</a></li>
            <li><a href="logIn.php">LOG IN</a></li>
        </ul>
    </nav>
    <label for="nav_check" class="hamburger">
        <div></div>
        <div></div>
        <div></div>
    </label>
</header>
<section class="hero">
    <div class="hero-container">
        <div class="column-left">
            <img src="https://i.ibb.co/z4GxffJ/photo-2-2023-01-30-10-33-02.jpg" alt="REx Logo" class="bg-logo"/>
            <p>Purchase medicines online and get it delivered right at your doorstep.</p>
            <a class="shopButton" href="shop.php">Browse Now ></a>
        </div>
        <div class="column-right">
            <img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" alt="Online Pharmacy Illustration" class="hero-image"/>
        </div>
    </div>
</section>
<section class="about" id="about">
    <div class="about-container">
        <div class="about-content">
            <h1>About Us</h1>
            <br>
            <p>A better way for customers to buy medications is intended by the online medicine
                ordering service REx. "REx" is an acronym made up of two abbreviations.
                Rx stands for "medical prescription" and "Ex" stands for "express." This means
                that when you buy medications, the application guarantees convenience and speedy
                delivery of medicines to you.</p>
        </div>
    </div>
</section>
<section class="pharmacies" id="pharmacies">
    <h1>Pharmacies</h1>
    <div class="pharmacies-container">
        <div class="pharmacies-col">
            <img src="https://i.ibb.co/pWx0ZBM/Rex-2.png">
            <h4>Pharmacy1</h4>
        </div>
        <div class="pharmacies-col">
            <img src="https://i.ibb.co/pWx0ZBM/Rex-2.png">
            <h4>Pharmacy2</h4>
        </div>
        <div class="pharmacies-col">
            <img src="https://i.ibb.co/pWx0ZBM/Rex-2.png">
            <h4>Pharmacy3</h4>
        </div>
        <div class="pharmacies-col">
            <img src="https://i.ibb.co/pWx0ZBM/Rex-2.png">
            <h4>Pharmacy4</h4>
        </div>
    </div>
</section>
<footer id="footer">
    <div class="main-content">
        <div class="left box">
            <h2>About us</h2>
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. </p>
            </div>
        </div>
        <div class="center box">
            <h2>Contact Information</h2>
            <div class="content">
                <div class="phone">
                    <span class="fa fa-phone"></span>
                    <span class="text">(+63) 9123 456 7891</span>
                </div>
                <div class="email">
                    <span class="fa fa-envelope"></span>
                    <span class="text">REx@gmail.com</span>
                </div>
            </div>
        </div>
        <div class="right box">
            <h2>Contact us</h2>
            <div class="content">
                <form action="#">
                    <div class="email">
                        <div class="text">Email</div>
                        <input type="email" required>
                    </div>
                    <div class="msg">
                        <div class="text">Message</div>
                        <textarea class="msg-txt" rows="2" cols="25" required></textarea>
                    </div>
                    <div class="btn">
                        <button type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="bottom">
        <center>
            <span class="credit">Created By <a href="index.php"><b>REx</b></a> | </span>
            <span class="fa fa-copyright"></span><span> 2022 All rights reserved.</span>
        </center>
    </div>
</footer>
</body>
</html>