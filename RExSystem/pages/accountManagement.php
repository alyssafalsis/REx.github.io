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
    <link rel="stylesheet" href="accountManagement.css"/>
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
<div class="editAccount">
    <h1 class="form-title">Edit Account</h1>
    <p>Input necessary details.</p>
    <form action="#">
        <div class="main-user-info">
            <div class="user-input-box">
                <label for="userName">Username</label>
                <input type="text" id="userName" placeholder="Username">
            </div>
            <div class="user-input-box">
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Name">
            </div>
            <div class="user-input-box">
                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="Email">
            </div>
            <div class="user-input-box">
                <label for="mobileNumber">Mobile Number</label>
                <input type="text" id="mobileNumber" placeholder="Mobile Number">
            </div>
            <div class="gender-details-box">
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="others">
                    <label for="others">Others</label>
                </div>
            </div>
        </div>
        <div class="form-submit-btn">
            <input type="submit" name="saveChanges" value="Save Changes">
            <input type="submit" name="cancel" value="Cancel">
        </div>
</div>
</form>
</div>
</body>
</html>