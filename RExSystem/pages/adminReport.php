<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin View</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="adminPanel.css"/>
    <link rel="stylesheet" href="details.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="fa fa-certificate"></span><span>REx Admin</span></h2>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="adminPharmacySubscription.php">
                    <span class="fa fa-calendar-check-o"></span>
                    <span>Subscriptions</span>
                </a>
            </li>
            <li>
                <a href="adminPharmacyAccounts.php">
                    <span class="fa fa-user-plus"></span>
                    <span>Pharmacies</span>
                </a>
            </li>
            <li>
                <a href="adminCustomerList.php">
                    <span class="fa fa-users"></span>
                    <span>Customers</span>
                </a>
            </li>
            <li>
                <a href="adminReport.php" class="active">
                    <span class="fa fa-envelope-o"></span>
                    <span>Reports</span>
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
            Menu
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
        <h1>Customer Reports</h1>
        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <div class="table-search">
                            <span class="fa fa-search"></span>
                            <input type="search" placeholder="Search"/>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <td>Report ID</td>
                                    <td>Email</td>
                                    <td>Details</td>
                                    <td>Delete</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>123123</td>
                                    <td>lorem.ipsum@gmail.com</td>
                                    <td>
                                        <a href="#" onclick="togglePopup()" ><i class='fa fa-info-circle' style='font-size:24px'></i></a>
                                    </td>
                                    <td><a href="#"><i class="fa fa-trash-o" style="font-size:24px"></i></a></td>
                                </tr>
                                <tr>
                                    <td>123123</td>
                                    <td>lorem.ipsum@gmail.com</td>
                                    <td>
                                        <a href="#" onclick="togglePopup()" ><i class='fa fa-info-circle' style='font-size:24px'></i></a>
                                    </td>
                                    <td><a href="#"><i class="fa fa-trash-o" style="font-size:24px"></i></a></td>
                                </tr>
                                <tr>
                                    <td>123123</td>
                                    <td>lorem.ipsum@gmail.com</td>
                                    <td>
                                        <a href="#" onclick="togglePopup()" ><i class='fa fa-info-circle' style='font-size:24px'></i></a>
                                    </td>
                                    <td><a href="#"><i class="fa fa-trash-o" style="font-size:24px"></i></a></td>
                                </tr>

                                <tr>
                                    <td>123123</td>
                                    <td>lorem.ipsum@gmail.com</td>
                                    <td>
                                        <a href="#" onclick="togglePopup()" ><i class='fa fa-info-circle' style='font-size:24px'></i></a>
                                    </td>
                                    <td><a href="#"><i class="fa fa-trash-o" style="font-size:24px"></i></a></td>
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
                <h1>Customer Report</h1>
                <div class="popup-details">
                    <p><b>Message:</b> Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt</p>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="details.js"></script>
</body>
</html>