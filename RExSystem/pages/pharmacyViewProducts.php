<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pharmacy Inventory</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="pharmacyPanel.css"/>
    <link rel="stylesheet" href="details.css"/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="fa fa-certificate"></span><span>RExpress</span></h2>
    </div>
    <div class="sidebar-menu">
        <ul>
<!--            <li>-->
<!--                <span class="fa fa-info-circle"></span>-->
<!--                <span>Dashboard</span>-->
<!--                </a>-->
<!--            </li>-->
            <li>
                <a href="pharmacyAccountOverview.php">
                    <span class="fa fa-user-circle-o"></span>
                    <span>Account Overview</span>
                </a>
            </li>
            <li>
                <a href="pharmacySubscription.php">
                    <span class="fa fa-calendar-check-o"></span>
                    <span>Subscription</span>
                </a>
            </li>
            <li>
                <a href="pharmacyOrders.php">
                    <span class="fa fa-shopping-basket"></span>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="pharmacyViewProducts.php" class="active">
                    <span class="fa fa-archive"></span>
                    <span>Inventory</span>
                </a>
            </li>
            <li>
                <a href="pharmacyProductRatingFeedback.php">
                    <span class="fa fa-star-half-empty"></span>
                    <span>Rating/Feedback</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="main-content">
    <header>
        <h2>
            <label for="nav-toggle">
                <span class="fa fa-reorder"></span>
            </label>
            Dashboard
        </h2>
        <div class="user-wrapper">
            <img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="">
            <div>
                <h4>John Doe</h4>
                <small>Super admin</small>
            </div>
        </div>
    </header>

    <main>
        <h1>Products</h1>
        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <a href="crud.php"><button>
                            ADD PRODUCT
                        </button></a>
                    </div>

                    <div class="card-body   ">
                        <div class="table-responsive">
                            <table class="content-table">
                                <thead>
                                <tr>
                                    <td>Product ID</td>
                                    <td>Name</td>
                                    <td>Quantity</td>
                                    <td>Price</td>
                                    <td>Info</td>
                                    <td>Edit/Delete</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>#000000</td>
                                    <td>0-00-0000</td>
                                    <td>8</td>
                                    <td>Php260.00</td>
                                    <td><a href="#" onclick="togglePopup()"><i class='fa fa-info-circle' style='font-size:24px'></i></a></td>
                                    <td><a href="#"><i class='fas fa-edit' style='font-size:24px'></i></a>
                                        <a href="#"><i class='fas fa-trash-alt' style='font-size:24px;color'></i></a></td>
                                </tr>
                                <tr>
                                    <td>#000000</td>
                                    <td>0-00-0000</td>
                                    <td>8</td>
                                    <td>Php260.00</td>
                                    <td><a href="#" onclick="togglePopup()"><i class='fa fa-info-circle' style='font-size:24px'></i></a></td>
                                    <td><a href="#"><i class='fas fa-edit' style='font-size:24px'></i></a>
                                        <a href="#"><i class='fas fa-trash-alt' style='font-size:24px'></i></a></td
                                </tr>
                                <tr>
                                    <td>#000000</td>
                                    <td>0-00-0000</td>
                                    <td>8</td>
                                    <td>Php260.00</td>
                                    <td><a href="#" onclick="togglePopup()"><i class='fa fa-info-circle' style='font-size:24px'></i></a></td>
                                    <td><a href="#"><i class='fas fa-edit' style='font-size:24px'></i></a>
                                        <a href="#"><i class='fas fa-trash-alt' style='font-size:24px'></i></a></td
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="popup" id="popup-1">
        <div class="overlay">
            <div class="content">
                <div class="close-btn" onclick="togglePopup()">&times;</div>
                <h1>Product Details</h1>
                <div class="popup-details">
                    <p><b>PRODUCT ID:</b> 123456</p>
                    <p><b>BRANDED NAME:</b> Brand Name</p>
                    <p><b>GENERIC NAME:</b> Generic Name</p>
                    <p><b>TYPE:</b> Prescribed/Over-the-Counter</p>
                    <p><b>PRICE:</b> PHP</p>
                    <p><b>STOCK TYPE:</b> Per piece/Per box</p>
                    <p><b>STOCK:</b> 123</p>
                    <p><b>DETAILS:</b> Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt</p>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="details.js"></script>
</body>
</html>