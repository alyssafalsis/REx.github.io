<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pharmacy Account Overview</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="pharmacyPanel.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="fas fa-clinic-medical"></span><span>Pharmacy 1</span></h2>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="pharmacyProfileOverview.php" class="active">
                    <span class="fa fa-user-circle-o"></span>
                    <span>Profile Overview</span>
                </a>
            </li>
            <li>
                <a href="pharmacyAccountOverview.php">
                    <span class="fa fa-address-card-o"></span>
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
                <a href="pharmacyOrders.php" >
                    <span class="fa fa-shopping-basket"></span>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="pharmacyInventory.php" >
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
                Menu
            </label>
        </h2>
        <div class="user-wrapper">
            <img src="https://i.ibb.co/kqPp6dz/photo-10-2023-01-30-10-33-02.jpg" width="30px" height="30px" alt="">
            <div>
                <h4>John Doe</h4>
                <small>Super admin</small>
            </div>
            <a href="pharmacyLogIn.php"><span class="fa fa-sign-out"></span></a>
        </div>
    </header>

    <main>
        <h1>Profile Overview</h1>
        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <h2>Profile</h2>
                        <button type="button" onclick="location.href='pharmacyEditProfile.php'" style="cursor: pointer">
                            EDIT PROFILE
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="ao-tbl">
                                <thead>
                                <tr>
                                    <td>Pharmacy</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Contact Number</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Area</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Subscription</td>
                                    <td>-</td>
                                </tr>
                                </thead>
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