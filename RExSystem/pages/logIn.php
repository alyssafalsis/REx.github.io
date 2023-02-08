<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REx Log In</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="navbar.css"/>
    <link rel="stylesheet" href="logIn.css"/>
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
            <li><a href="#">CONTACT US</a></li>
            <li><a href="logInAdmin.php">LOG IN AS ADMIN</a></li>
        </ul>
    </nav>
    <label for="nav_check" class="hamburger">
        <div></div>
        <div></div>
        <div></div>
    </label>
</header>
<div class="logIn">
    <h1 class="form-title">Log In</h1>
    <p>Input necessary details.</p>
    <form action="#">
        <div class="main-user-info">
            <div class="user-input-box">
                <input type="text" id="userName" placeholder="Username">
            </div>
            <div class="user-input-box">
                <input type="password" id="password" placeholder="Password">
                <p class="forgotPassword"><a href="resetPassword.php">Forgot Password?</a></p>
            </div>
            <div class="form-submit-btn">
                <input type="submit" name="logIn" value="Log In">
            </div>
            <br>
            <p><a href="signUp.php">Don't have an Account? Sign Up instead.</a></p>
        </div>
    </form>
</div>
<body/>
<html/>