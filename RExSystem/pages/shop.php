<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop</title>
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

<section class="page-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 blog-form">
                <h2 class="blog-sidebar-title"><b>All Categories</b></h2>
                <hr />

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label blog-sidebar-list" for="flexCheckDefault">
                        Over-the-Counter
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label blog-sidebar-list" for="flexCheckChecked">
                        Prescription
                    </label>
                </div>

                <div>&nbsp;</div>
                <div>&nbsp;</div>


                <h2 class="blog-sidebar-title"><b>Filter</b></h2>
                <hr />

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Receipient's username" aria-describely="basic-addon2">

                </div>

                <h5 class="collapsed">Collapsed Filter <span class="	fa fa-angle-up"></span></h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Recommended
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Recently Added
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Most Rated
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Price: Low to High
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Price: High to Low
                    </label>
                </div>

            </div>
            <!--END  <div class="col-lg-3 blog-form">-->

            <div class="col-lg-9" style="padding-left: 30px;">
                <div class="row">
                    <div class="col">
                        Showing all 9 results
                    </div>

                    <div class="col">
                        <select class="form-control">
                            <option value="">Default Sorting</option>
                            <option value="popularity">Sorting by popularity</option>
                            <option value="average">Sorting by average</option>
                            <option value="latest">Sorting by latest</option>
                            <option value="low">Sorting by low</option>
                            <option value="high">Sorting by high</option>
                        </select>
                    </div>

                </div>
                <!-- Sorting by <div class="row"> -->
                <div>&nbsp;</div>
                <div>&nbsp;</div>

                <div class="row">
                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <a href="shopViewPage.php" target="_blank"><img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image"></a>
                                <h5 class="card-title">CLARITIN</h5>
                                <p class="card-text small">Claritin Loratadine 10mg</p>
                                <p class="tags">₱ 112.00</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-full"></span> 4.5
                                <div class="popup" onclick="myFunction()">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="popup-text" id="myPopup">Item/s added to cart!</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <a href="shopViewPage.php" target="_blank"><img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image"></a>
                                <h5 class="card-title">CONZACE</h5>
                                <p class="card-text small">Conzace Multivitamins + Minerals 1 Softgel Capsule</p>
                                <p class="tags">₱12.75</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <a href="shopViewPage.php" target="_blank"><img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image"></a>
                                <h5 class="card-title">CLARITIN</h5>
                                <p class="card-text small">Claritin Loratadine 10mg</p>
                                <p class="tags">₱ 112.00</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Sorting by <div class="row"> -->

                <div>&nbsp;</div>
                <div>&nbsp;</div>

                <div class="row">
                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <a href="shopViewPage.php" target="_blank"><img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image"></a>
                                <h5 class="card-title">CONZACE</h5>
                                <p class="card-text small">Conzace Multivitamins + Minerals 1 Softgel Capsule</p>
                                <p class="tags">₱12.75</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <a href="shopViewPage.php" target="_blank"><img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image"></a>
                                <h5 class="card-title">CLARITIN</h5>
                                <p class="card-text small">Claritin Loratadine 10mg</p>
                                <p class="tags">₱ 112.00</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <a href="shopViewPage.php" target="_blank"><img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image"></a>
                                <h5 class="card-title">CONZACE</h5>
                                <p class="card-text small">Conzace Multivitamins + Minerals 1 Softgel Capsule</p>
                                <p class="tags">₱12.75</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Sorting by <div class="row"> -->
                <div>&nbsp;</div>
                <div>&nbsp;</div>

                <div class="row">
                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <a href="shopViewPage.php" target="_blank"><img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image"></a>
                                <h5 class="card-title">CLARITIN</h5>
                                <p class="card-text small">Claritin Loratadine 10mg</p>
                                <p class="tags">₱ 112.00</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <a href="shopViewPage.php" target="_blank"><img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image"></a>
                                <h5 class="card-title">CONZACE</h5>
                                <p class="card-text small">Conzace Multivitamins + Minerals 1 Softgel Capsule</p>
                                <p class="tags">₱12.75</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <a href="shopViewPage.php" target="_blank"><img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image"></a>
                                <h5 class="card-title">CLARITIN</h5>
                                <p class="card-text small">Claritin Loratadine 10mg</p>
                                <p class="tags">₱ 112.00</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Sorting by <div class="row"> -->
            </div>
            <!--END  <div class="col-lg-9">-->

        </div>
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
<script src="cart.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>