<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="Shop.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <li><a href="logIn.php">LOG IN</a></li>
        </ul>
    </nav>
    <label for="nav_check" class="hamburger">
        <div></div>
        <div></div>
        <div></div>
    </label>
</header>

<header class="page-section masthead2">
    <div class="container h-50">
        <h1 class="section-header text-white font-weight-bold">Products</h1>
        <p class="main-menu text-white-75 font-weight-light mb-5"><a class="link-menu" href="home.html">Pharmacy 1 > <span style="color:white;">Products</span></a></p>

    </div>

</header>

<section class="page-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 blog-form">
                <h2 class="blog-sidebar-title"><b>All Categories</b></h2>
                <hr />

                <p class="blog-sidebar-list"><span class="fa fa-angle-down"></span> Vitamins & Supplements</p>
                <p class="card-text small under">Multivitamins and Overall Wellness</p>
                <p class="card-text small under">Immunity and Energy</p>
                <p class="card-text small under">Antioxidants and Skin</p>
                <p class="card-text small under">Children's Vitamins</p>


                <p class="blog-sidebar-list"><span class="	fa fa-angle-right"></span> Eye and Ear</p>
                <p class="blog-sidebar-list"><span class="	fa fa-angle-right"></span> Geriatic Care</p>
                <p class="blog-sidebar-list"><span class="	fa fa-angle-right"></span> First Aid & Supplies</p>
                <p class="blog-sidebar-list"><span class="	fa fa-angle-right"></span> Over-the-Counter</p>
                <p class="blog-sidebar-list"><span class="	fa fa-angle-right"></span> Beauty Supplements</p>

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
                                <img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image">
                                <h5 class="card-title">CLARITIN</h5>
                                <p class="card-text small">Claritin Loratadine 10mg</p>
                                <p class="tags">₱ 112.00</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <a href="https://api.whatsapp.com/send?phone=2348162667912" target="_blank" class="btn btn-success button-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image center">
                                <h5 class="card-title">CONZACE</h5>
                                <p class="card-text small">Conzace Multivitamins + Minerals 1 Softgel Capsule</p>
                                <p class="tags">₱12.75</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <a href="https://api.whatsapp.com/send?phone=2348162667912" target="_blank" class="btn btn-success button-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image">
                                <h5 class="card-title">CLARITIN</h5>
                                <p class="card-text small">Claritin Loratadine 10mg</p>
                                <p class="tags">₱ 112.00</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <a href="https://api.whatsapp.com/send?phone=2348162667912" target="_blank" class="btn btn-success button-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
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
                                <img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image center">
                                <h5 class="card-title">CONZACE</h5>
                                <p class="card-text small">Conzace Multivitamins + Minerals 1 Softgel Capsule</p>
                                <p class="tags">₱12.75</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <a href="https://api.whatsapp.com/send?phone=2348162667912" target="_blank" class="btn btn-success button-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image">
                                <h5 class="card-title">CLARITIN</h5>
                                <p class="card-text small">Claritin Loratadine 10mg</p>
                                <p class="tags">₱ 112.00</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <a href="https://api.whatsapp.com/send?phone=2348162667912" target="_blank" class="btn btn-success button-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image center">
                                <h5 class="card-title">CONZACE</h5>
                                <p class="card-text small">Conzace Multivitamins + Minerals 1 Softgel Capsule</p>
                                <p class="tags">₱12.75</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <a href="https://api.whatsapp.com/send?phone=2348162667912" target="_blank" class="btn btn-success button-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
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
                                <img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image">
                                <h5 class="card-title">CLARITIN</h5>
                                <p class="card-text small">Claritin Loratadine 10mg</p>
                                <p class="tags">₱ 112.00</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <a href="https://api.whatsapp.com/send?phone=2348162667912" target="_blank" class="btn btn-success button-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image center">
                                <h5 class="card-title">CONZACE</h5>
                                <p class="card-text small">Conzace Multivitamins + Minerals 1 Softgel Capsule</p>
                                <p class="tags">₱12.75</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <a href="https://api.whatsapp.com/send?phone=2348162667912" target="_blank" class="btn btn-success button-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="" class="product-image">
                                <h5 class="card-title">CLARITIN</h5>
                                <p class="card-text small">Claritin Loratadine 10mg</p>
                                <p class="tags">₱ 112.00</p>
                                <p class="card-text small">Stock: 119</p>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-empty"></span> 4.5
                                <a href="https://api.whatsapp.com/send?phone=2348162667912" target="_blank" class="btn btn-success button-text"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
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


<!-- Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>




</body>
</html>