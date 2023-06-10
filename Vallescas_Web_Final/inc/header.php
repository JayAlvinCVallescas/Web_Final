<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zown</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/signup.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/market.css">
    <link rel="stylesheet" href="./css/community.css">
    <link rel="stylesheet" href="./css/product-detail.css">
    <link rel="stylesheet" href="./css/order-items.css">
    <link rel="stylesheet" href="./css/post.css">
    <link rel="stylesheet" href="./css/edit.css">
    <link rel="shortcut icon" type="image/jpg" href="./images/Zown.jpg">
</head>

<body>
    <header class="n-container">
        <div class="nav-container">
            <div class="icon"><a href="index.php">Zown</a></div>
            <nav class="nav">
                <ul>
                    <li><a href="community.php"> COMMUNITY</a></li>
                    <li><a href="market.php"> MARKET PLACE</a></li>
                    <li><a href="contact.php"> CONTACT</a></li>
                </ul>
            </nav>
            <div class="nav-right">
                <div class="cart" onclick="showCartContent()">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <?php
                // Check if user is logged in
                if (isset($_SESSION['usern'])) {
                    echo "<a href='./inc/logout.php'><button class='sign-btn'>LOGOUT</button></a>";
                } else {
                    echo "<button class='sign-btn' id='sign-up' onclick='displayAll()'>JOIN US</button>";
                }
                ?>
            </div>
            <img src="../images/menu_white.jpeg" alt="" class="menu">
        </div>
    </header>