<?php 
    require 'includes/header.php';
    require 'config/functions.php';
    
    if (!$_SESSION) header("Location: account.php");
    if (isset($_GET['id']) && !empty($_GET['id'] && $_SESSION)) {
            foreach ($product->getProducts($_GET['id']) as $product) {
                $data = [
                    'user_id' => $_SESSION['id'],
                    'product_id' => $product['product_id'],
                    'cart_quantity' => 1,
                    'order_date' => date("Y-m-d"),
                ];

                // print_r($data);
                $cart->addCart($data);
                $_SESSION['msg'] = 'Added to cart'; //sweet alert     
                header("Location: index.php");
            }
        }
?>