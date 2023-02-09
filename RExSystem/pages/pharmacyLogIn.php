<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pharmacy Log In</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="navbar.css"/>
    <link rel="stylesheet" href="pharmacyLogIn.css"/>
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
            <li><a href="logIn.php">LOG IN AS CUSTOMER</a></li>
            <li><a href="adminLogIn.php">LOG IN AS ADMIN</a></li>
        </ul>
    </nav>
    <label for="nav_check" class="hamburger">
        <div></div>
        <div></div>
        <div></div>
    </label>
</header>
<div class="logInAdmin">
    <h1 class="form-title">Pharmacy Log In</h1>
    <p>Input necessary details.</p>
    <form action="pharmacyProfileOverview.php">
        <div class="main-user-info">
            <div class="user-input-box">
                <input type="text" id="userName" placeholder="Username">
            </div>
            <div class="user-input-box">
                <input type="password" id="password" placeholder="Password">
            </div>
            <div class="form-submit-btn">
                <input type="submit" name="logIn" value="Log In">
            </div>
        </div>
    </form>
</div>
<body/>
<html/>