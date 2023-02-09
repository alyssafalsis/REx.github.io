<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Product</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="shop.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <li><a href="#footer">CONTACT US</a></li>
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

<section id="product-details" class="section-p1">
    <div class="single-img">
        <img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="100%" id="MainImg">
    </div>
    <div class="single-img-details">
        <h4>Claritin</h4>
        <h6>Claritin Loratadine 10mg (1 tablet)</h6>
        <h2>₱ 37.00</h2>
        <input type="number" value="1">
        <a href="https://api.whatsapp.com/send?phone=2348162667912" target="_blank" class="btn btn-success button-text">Add to Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
        <h4>Product Details</h4>
        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a
            type specimen book. It has survived not only five centuries,but also the leap
            into electronic typesetting, remaining essentially unchanged.
        </span>
    </div>
</section>


<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>

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
<!-- Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>
</html>