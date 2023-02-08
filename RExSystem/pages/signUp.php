<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REx Customer Registration</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="navbar.css"/>
    <link rel="stylesheet" href="signUp.css"/>
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
        </ul>
    </nav>
    <label for="nav_check" class="hamburger">
        <div></div>
        <div></div>
        <div></div>
    </label>
</header>
<div class="signUp">
    <h1 class="form-title">Sign Up</h1>
    <p>Input necessary details.</p>
    <form action="#">
        <div class="main-user-info">
            <div class="user-input-box">
                <input type="text" id="userName" placeholder="Username">
            </div>
            <div class="user-input-box">
                <input type="password" id="password" placeholder="Password">
            </div>
            <div class="user-input-box">
                <input type="text" id="mobileNumber" placeholder="Mobile Number">
            </div>
            <div class="user-input-box">
                <input type="email" id="email" placeholder="Email">
            </div>
            <div class="form-submit-btn">
                <input type="submit" name="signUp" value="Register">
            </div>
            <br>
            <p><a href="logIn.php">Have an Account? Log In instead.</a></p>
        </div>
    </form>
</div>
<body/>
<html/>