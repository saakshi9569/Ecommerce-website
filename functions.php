<?php

//require MYSQL Connection
require ('database/Database.php');
//require Product Class
require ('database/Product.php');
//require Cart Class
require ('database/Cart.php');
//require User Class
require ('database/User.php');

//Database Object
$db= new Database();

//Product object
$product = new Product($db);
$product_shuffle = $product->getData();

//Cart object
$Cart= new Cart($db);

//User object
$user= new User($db);
?>


