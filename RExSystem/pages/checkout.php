<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="checkout.css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" type="text/css">
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
        </ul>
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
            <h3>Checkout Information</h3>
            <hr/>
            <h5>Receiver Information</h5>
            <form>
                <div class="form-row">
                    <div class="col-12">
                        <input type="text" class="form-control form-control-sm" id="inputEmail4" placeholder="First Name">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control form-control-sm" id="inputPassword4" placeholder="Last Name">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control form-control-sm" id="inputPassword4" placeholder="Mobile Number">
                    </div>
                </div>
                <h5>Address Information</h5>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" placeholder="Address Line">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" placeholder="Barangay">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" placeholder="City/Municipality">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm" placeholder="Province">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <h5>Payment Method</h5>
                    <select class="custom-select mr-sm-2 form-control form-control-sm" id="inlineFormCustomSelect">
                        <option selected>Choose...</option>
                        <option>Cash On Delivery</option>
                        <option>GCash QR</option>
                        <option>Maya QR</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="card-02">
            <h3>Order Summary</h3>
            <hr>
            <div class="summary">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <h6>Items Total</h6>
                    </div>
                    <div class="col-3 col-md-3">
                        <h6>PHP500</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8">
                        <h6>Shipping Fee</h6>
                    </div>
                    <div class="col-3 col-md-3">
                        <h6>PHP45</h6>
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
        </div>

    </div>
    <h5><a href="cart.php"><i class="fa fa-long-arrow-left"></i> Back to Shopping Cart</a></h5>
</div>

</body>
</html>