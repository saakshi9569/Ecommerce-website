<?php
    // if(!isset($_SESSION)) 
    // { 
    //     session_start(); 
    // } 

    !isset($_SESSION) ? session_start() : null;

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asian Wolf</title>
    <link rel="stylesheet" href="styles/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="images/image2.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Owl Carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php
//require MYSQL Connection
require ('functions.php');
?>
</head>
<body>
<header>
<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
    <a href="index.php"><img src="images/image2.jpg" width="50px"></a> 
            </div>
            <div class="T">Asian Wolf</div>
            <nav>
                <ul id="MenuItems" style="margin-top:10px">
                    <li><a href="index.php"class="text-dark">Home</a> </li>
                    <li><a href="products.php"class="text-dark">Products</a> </li>
                    <li><a href="About.php"class="text-dark">About</a> </li>
                    <li><a href="Contact.php"class="text-dark">Contact Us</a> </li>
                    <?php 
                    if ($_SESSION) {
                        if ($_SESSION['id']) {
                            echo '<li><a href="?action=logout">Logout</a></li>';
                            
                            if (isset($_GET['action'])) {
                                session_destroy();
                                header("location:index.php");
                            }
                            
                        } 
                    }
                    else {
                        echo '<li><a href="account.php"class="text-dark">Account</a> </li>';
                    }
                    ?>
                    
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
        </div>
    </div>
</div>
</header>
<!--start #main-site-->
    <main id="main-site">