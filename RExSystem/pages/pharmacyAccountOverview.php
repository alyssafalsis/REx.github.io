<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pharmacy Account Overview</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="pharmacyPanel.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="fa fa-certificate"></span><span>Pharmacy1</span></h2>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="pharmacyAccountOverview.php" class="active">
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
                <a href="pharmacyViewProducts.php" >
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
        <!--            <div class="cards">-->
        <!--                <div class="card-single">-->
        <!--                    <div>-->
        <!--                        <h1>54</h1>-->
        <!--                        <span>Total Sales</span>-->
        <!--                    </div>-->
        <!--                    <div>-->
        <!--                        <span class="fa fa-bar-chart"></span>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="card-single">-->
        <!--                    <div>-->
        <!--                        <h1>54</h1>-->
        <!--                        <span>Orders</span>-->
        <!--                    </div>-->
        <!--                    <div>-->
        <!--                        <span class="fa fa-cart-arrow-down"></span>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <h1>Account Overview</h1>
        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <h2>Profile</h2>
                        <button>
                            Edit Profile
                        </button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <td>Project Title</td>
                                    <td>Department</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>UI/UX Design</td>
                                    <td>UI Team</td>
                                </tr>
                                <tr>
                                    <td>UI/UX Design</td>
                                    <td>UI Team</td>
                                </tr>
                                <tr>
                                    <td>UI/UX Design</td>
                                    <td>UI Team</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
</body>
</html>