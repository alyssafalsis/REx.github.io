<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                <a href="#" class="active">
                    <span class="fa fa-user-circle-o"></span>
                    <span>Customers</span>
                </a>
            </li>
            <li>
                <a href="viewPharmacySubscriptions.php">
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
        <h1>Customer List</h1>
        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <div class="table-search">
                            <span class="fa fa-search"></span>
                            <input type="search" placeholder="Search customer"/>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <td>Customer ID</td>
                                    <td>Username</td>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Mobile Number</td>
                                    <td>Gender</td>
                                    <td>Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>123123</td>
                                    <td>Aly</td>
                                    <td>Alyssa Falsis</td>
                                    <td>alyssafalsis@gmail.com</td>
                                    <td>091932692896</td>
                                    <td>F</td>
                                    <td>
                                        <button>Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123123</td>
                                    <td>Zoey</td>
                                    <td>Zoilo Poblete</td>
                                    <td>zp@gmail.com</td>
                                    <td>091932692896</td>
                                    <td>M</td>
                                    <td>
                                        <button>Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123123</td>
                                    <td>Machu</td>
                                    <td>Matthew Layon</td>
                                    <td>ml@gmail.com</td>
                                    <td>091932692896</td>
                                    <td>M</td>
                                    <td>
                                        <button>Delete</button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>123123</td>
                                    <td>Len</td>
                                    <td>Allen Sauco</td>
                                    <td>as@gmail.com</td>
                                    <td>091932692896</td>
                                    <td>M</td>
                                    <td>
                                        <button>Delete</button>
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