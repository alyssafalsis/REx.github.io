<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin View</title>
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
                <a href="viewCustomers.php">
                    <span class="fa fa-user-circle-o"></span>
                    <span>Customers</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <a href="#" class="active">
                        <span class="fa fa-calendar-check-o"></span>
                        <span>Subscriptions</span>
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
        <h1>Pharmacy Subscribers</h1>
        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <div class="table-search">
                            <span class="fa fa-search"></span>
                            <input type="search" placeholder="Search pharmacy"/>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <td>Subscription ID</td>
                                    <td>Pharmacy</td>
                                    <td>Start Date</td>
                                    <td>End Date</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>123123</td>
                                    <td>The Generics Pharmacy</td>
                                    <td>01-02-2022</td>
                                    <td>01-03-2022</td>
                                    <td>Active</td>
                                    <td>
                                        <button>End Subscription</button>
                                        <button>Renew Subscription</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123456</td>
                                    <td>Maharlika Pharmacy</td>
                                    <td>01-05-2022</td>
                                    <td>01-06-2022</td>
                                    <td>Active</td>
                                    <td>
                                        <button>End Subscription</button>
                                        <button>Renew Subscription</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>135790</td>
                                    <td>Mercury Drugstore</td>
                                    <td>01-07-2022</td>
                                    <td>01-08-2022</td>
                                    <td>Active</td>
                                    <td>
                                        <button>End Subscription</button>
                                        <button>Renew Subscription</button>
                                    </td>
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