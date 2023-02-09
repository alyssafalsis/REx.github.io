<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pharmacy List</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="adminPanel.css"/>
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
                <a href="adminPharmacySubscription.php" >
                    <span class="fa fa-calendar-check-o"></span>
                    <span>Subscriptions</span>
                </a>
            </li>
            <li>
                <a href="adminPharmacyAccounts.php" class="active">
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
                <a href="adminReport.php">
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
            <a href="adminLogIn.php"><span class="fa fa-sign-out"></span></a>
        </div>
    </header>

    <main>
        <h1>Pharmacy Accounts</h1>
        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <div class="table-search">
                            <span class="fa fa-search"></span>
                            <input type="search" placeholder="Search"/>
                        </div>
                        <button type="button" onclick="location.href='adminAddPharmacy.php'">
                            ADD ACCOUNT
                        </button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <td>Subscription ID</td>
                                    <td>Pharmacy Name</td>
                                    <td>Username</td>
                                    <td>Password</td>
                                    <td>Mobile Number</td>
                                    <td>Email</td>
                                    <td>Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>#123456</td>
                                    <td>Pharmacy 1</td>
                                    <td>PharmacyAdmin0001</td>
                                    <td>@REx123456</td>
                                    <td>09171234567</td>
                                    <td>loremipsum@gmail.com</td>
                                    <td><a href="#"><i class="fa fa-edit" style="font-size:24px"></i></a>
                                        <a href="#"><i class="fa fa-trash-o" style="font-size:24px"></i></a></td>
                                </tr>
                                <tr>
                                    <td>#123456</td>
                                    <td>Pharmacy 1</td>
                                    <td>PharmacyAdmin0001</td>
                                    <td>@REx123456</td>
                                    <td>09171234567</td>
                                    <td>loremipsum@gmail.com</td>
                                    <td><a href="#"><i class="fa fa-edit" style="font-size:24px"></a></i>
                                        <a href="#"><i class="fa fa-trash-o" style="font-size:24px"></a></i></td>
                                </tr>
                                <tr>
                                    <td>#123456</td>
                                    <td>Pharmacy 1</td>
                                    <td>PharmacyAdmin0001</td>
                                    <td>@REx123456</td>
                                    <td>09171234567</td>
                                    <td>loremipsum@gmail.com</td>
                                    <td><a href="#"><i class="fa fa-edit" style="font-size:24px"></a></i>
                                        <a href="#"><i class="fa fa-trash-o" style="font-size:24px"></a></i></td>
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