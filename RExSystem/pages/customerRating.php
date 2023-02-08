<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customer Rating</title>
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="customerRating.css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
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
        <h3>Rating and Feedback Form</h3>
        <form action="#">
            <div class="rating">
                <input type="number" name="rating" hidden>
                <i class='bx bx-star star' style="--i: 0;"></i>
                <i class='bx bx-star star' style="--i: 1;"></i>
                <i class='bx bx-star star' style="--i: 2;"></i>
                <i class='bx bx-star star' style="--i: 3;"></i>
                <i class='bx bx-star star' style="--i: 4;"></i>
            </div>
            <textarea name="opinion" cols="30" rows="5" placeholder="Write your comment here..."></textarea>
            <div class="btn-group">
                <button type="submit" class="btn submit">Submit</button>
                <button class="btn cancel">Cancel</button>
            </div>
        </form>
    </div>
</div>
<script src="customerRating.js"></script>
</body>
</html>