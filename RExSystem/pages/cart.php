<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart</title>
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="cart.css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" type="text/css">
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
<div class="container">
    <div class="row">
        <div class="card-01">
            <h3>Shopping Cart</h3>
            <hr/>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody class="tbody">
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg">
                            <div>
                                <p>Biogesic</p>
                                <small>Paracetamol</small>
                                <p class="description">500mg, 10 tablets</p>
                                <p class="stock">Stock: 20</p>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>PHP50</td>
                    <td>PHP50</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg">
                            <div>
                                <p>Hand Spray</p>
                                <small>Hygienix</small>
                                <p class="description">55 ml</p>
                                <p class="stock">Stock: 45</p>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="2"></td>
                    <td>PHP50</td>
                    <td>PHP100</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="card-02">
            <h3>Order Summary</h3>
            <hr>
            <div class="summary">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <h6>Item1</h6>
                    </div>
                    <div class="col-3 col-md-3">
                        <h6>PHP500</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8">
                        <h6>Item2</h6>
                    </div>
                    <div class="col-3 col-md-3">
                        <h6>PHP500</h6>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-md-8">
                    <h5>TOTAL</h5>
                </div>
                <div class="col-3 col-md-3">PHP545
                </div>
            </div>
            <a class="cartButton" href="checkout.php">CHECKOUT</a>
        </div>
    </div>
    <h5><a href="shop.php" class="cart-back"><i class="fa fa-arrow-left"></i> Back to Shop</a></h5>
</div>

</body>
</html>