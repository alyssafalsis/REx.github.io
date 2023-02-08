<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pharmacy Account Overview</title>
    <link rel="stylesheet" href="pharmacyPanel.css"/>
    <link rel="stylesheet" href="details.css"/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
                <a href="pharmacyViewProducts.php">
                    <span class="fa fa-archive"></span>
                    <span>Inventory</span>
                </a>
            </li>
            <li>
                <a href="pharmacyProductRatingFeedback.php" class="active">
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
        <h1>Customer Orders</h1>
        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <td>Rating ID</td>
                                    <td>Order ID</td>
                                    <td>Customer ID</td>
                                    <td>Date</td>
                                    <td>Info</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>123456</td>
                                    <td>392328</td>
                                    <td>236670</td>
                                    <td>02-02-2023</td>
                                    <td><a href="#" onclick="togglePopup()"><i class='fa fa-info-circle' style='font-size:24px'></i></a></td>
                                </tr>
                                <tr>
                                    <td>123456</td>
                                    <td>392328</td>
                                    <td>236670</td>
                                    <td>02-02-2023</td>
                                    <td><a href="#" onclick="togglePopup()"><i class='fa fa-info-circle' style='font-size:24px'></i></a></td>
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
                <h1>Feedback Details</h1>
                <div class="popup-details">
                    <p><b>RATING ID:</b> 123456</p>
                    <p><b>ORDER ID:</b> 123456</p>
                    <p><b>CUSTOMER ID:</b> 123456</p>
                    <p><b>DATE:</b> 00/00/00</p>
                    <p><b>FEEDBACK:</b> Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt</p>
                    <b>RATING:</b>  <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="details.js"></script>
</body>
</html>