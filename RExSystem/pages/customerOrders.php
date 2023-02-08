<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customer Rating</title>
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="customerOrders.css" />
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
<div class="rating-form">
    <div class="wrapper">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Order #</th>
                <th scope="col">Order Date</th>
                <th scope="col">Total Price</th>
                <th scope="col">Status</th>
                <th scope="col">Rate</th>
            </tr>
            </thead>
            <tbody class="tbody">
            <tr>
                <th scope="row">#1234</th>
                <td>9-25-2022</td>
                <td>PHP750</td>
                <td class="status completed">Success</td>
                <td><i class="fa fa-star completed"></i></td>
            </tr>
            <tr>
                <th scope="row">#1234</th>
                <td>9-25-2022</td>
                <td>PHP750</td>
                <td class="status cancelled">Cancelled</td>
                <td><i class="fa fa-star cancelled"></i></td>
            </tr>
            <tr>
                <th scope="row">#1234</th>
                <td>9-25-2022</td>
                <td>PHP750</td>
                <td class="status completed">Success</td>
                <td><i class="fa fa-star completed"></i></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>