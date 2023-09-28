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
    <div>
        <div class="navbar">
            <div class="logo">
    <a href="index.html"><img src="images/image2.jpg" width="50px"></a> 
            </div>
            <div class="T">Asian Wolf</div>
            <nav>
                <ul id="MenuItems" style="margin-top:10px">
                    <li><a href="index.php"class="text-dark">Home</a> </li>
                    <li><a href="product.php"class="text-dark">Products</a> </li>
                    <li><a href="About.php"class="text-dark">About</a> </li>
                    <li><a href="Contact.php"class="text-dark">Contact Us</a> </li>
                    <li><a href="account.php"class="text-dark">Account</a> </li>
                </ul>
            </nav>
            <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
        </div>
    </div>
</div>
</header> 
<section>        

</div> 
        <link rel="stylesheet" type="text/css" href="about-style.css">
        <div class="homepage">
                <div class="container-1">
                    <div class="aboutus_content-left">
                        <img src="images\about-us.jpg" alt="About Us photo">
                    </div>
                <div class="aboutus_content-right">
                    <h1>About Us</h1>
                    <p>We are not just an online store.Our website is a clothing line retailer that has a product line of streetwear graphic shirts, 
                        gymwear clothes and accessories. We inspire people to feel positive and confident in their gym clothes so they can 
                        get most out of their work and have a positive vibe the whole time.</p>
                    <button type="button" class="btn text-danger px-3 border-right"><a href="index.php"><b>SHOP NOW</b></a></button>
                </div>
            </div>
        </div>

 </div>
</section>
<!-------js for toggle form------->
<script>
var LoginForm = document.getElementById("LoginForm");
var RegForm = document.getElementById("RegForm");
var Indicator = document.getElementById("Indicator");
   
   function register(){
       RegForm.style.transform = "translateX(0px)";
       LoginForm.style.transform = "translateX(0px)";
       Indicator.style.transform = "translateX(100px)";
   }

   function login(){
       RegForm.style.transform = "translateX(300px)";
       LoginForm.style.transform = "translateX(300px)";
       Indicator.style.transform = "translateX(0px)";
   }

</script>
<?php
    include('footer.php');
?>