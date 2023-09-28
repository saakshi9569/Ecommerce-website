<?php
    include('header.php');
    ob_start();
?>
<?php
    /* include  product*/
    include("templates/_products.php");
    /* include  product*/


    /* include featured product*/
    include("templates/featured-products.php");
    /* include featured product*/
?>
<?php
    include('footer.php');
?>