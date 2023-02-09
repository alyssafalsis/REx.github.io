<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="navbar.css"/>
    <link rel="stylesheet" href="accountManagement.css"/>
</head>
<body>
<header>
    <div class="logo">
        <a href="indexLogIn.php"><img class="logo-img" src="https://i.ibb.co/pWx0ZBM/Rex-2.png" alt=""></a>
    </div>
    <input type="checkbox" id="nav_check" hidden>
    <nav>
        <div class="logo">
            <img class="logo-img" src="https://i.ibb.co/pWx0ZBM/Rex-2.png" alt="">
        </div>
        <div class="menu-bar">
            <ul>
                <li><a href="indexLogIn.php">HOME</a></li>
                <li><a href="shop.php">SHOP</a></li>
                <li><a href="#">MENU <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="cart.php">CART</a></li>
                            <li><a href="accountView.php">PROFILE</a></li>
                            <li><a href="customerOrders.php">ORDERS</a></li>
                            <li><a href="index.php">LOGOUT</a></li>
                        </ul>
                    </div>
                </li>
                <!--            <li><a href="index.php">LOGOUT</a></li>-->
                <!--            <li><a href="#"><span class='fa fa-user-circle-o'></span></a></li>-->
                <!--            <li><a href="cart.php"><span class='fas fa-shopping-cart'></span></a></li>-->
                <!--            <li><a href="index.php"><span class='fa fa-sign-out'></span></a></li>-->
            </ul>
        </div>
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
                <label for="userName">Username:</label>
                <input type="text" id="userName" placeholder="Username">
            </div>
            <div class="user-input-box">
                <label for="name">Name:</label>
                <input type="text" id="name" placeholder="Name">
            </div>
            <div class="user-input-box">
                <label for="email">Email Address:</label>
                <input type="email" id="email" placeholder="Email">
            </div>
            <div class="user-input-box">
                <label for="mobileNumber">Mobile Number:</label>
                <input type="text" id="mobileNumber" placeholder="Mobile Number">
            </div>
            <div class="gender-details-box">
                <span class="gender-title">Gender:</span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="others">
                    <label for="others">Others</label>
                </div>
            </div>
            <div class="form-submit-btn btn-group">
                <button type="button" onclick="location.href='accountView.php'" style="cursor: pointer" >Update</button>
                <button type="button" onclick="location.href='accountView.php'" style="cursor: pointer" >Cancel</button>
            </div>
        </div>

</div>
</form>
</div>
</body>
</html>