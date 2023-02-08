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
            <li><a href="">CONTACT US</a></li>
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
<section class="about">
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
<section class="pharmacies">
    <h1>Pharmacies</h1>
    <div class="pharmacies-container">
        <div class="pharmacies-col">
            <img src="https://i.ibb.co/YBs9vq7/photo-8-2023-01-30-10-33-02.jpg">
            <h4>Pharmacy1</h4>
        </div>
        <div class="pharmacies-col">
            <img src="https://i.ibb.co/7JbSPtg/photo-6-2023-01-30-10-33-02.jpg">
            <h4>Pharmacy2</h4>
        </div>
        <div class="pharmacies-col">
            <img src="https://i.ibb.co/RCxqMBC/photo-7-2023-01-30-10-33-02.jpg">
            <h4>Pharmacy3</h4>
        </div>
        <div class="pharmacies-col">
            <img src="https://i.ibb.co/3hf6dHn/photo-5-2023-01-30-10-33-02.jpg">
            <h4>Pharmacy4</h4>
        </div>
    </div>
</section>
</body>
</html>