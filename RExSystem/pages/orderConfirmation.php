<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="OrderConfirmation.css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
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
                <li><a href="#">CONTACT US</a></li>
                <li><a href="shop.php">SHOP</a></li>
                <li><a href="#">MENU <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="cart.php">CART</a></li>
                            <li><a href="#">PROFILE</a></li>
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
<section class="hero" >
    <div class="hero-container">
        <div class="column-left">
            <h1>Order Confirmed!</h1>
            <p>We???ve received your order and expect to receive your item/s at your preferred
                time of delivery. You can find your purchase detail below. Thank you!</p>
        </div>
        <div class="column-right">
            <img src="https://i.ibb.co/v3qgwzq/image-removebg-preview-1.png" alt="Online Pharmacy Illustration" class="hero-image"/>
        </div>
    </div>
</section>
</body>
</html>