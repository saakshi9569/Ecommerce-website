<?php
    ob_start();
    include('header.php');
?>
<?php
    /* include shopping cart*/
    include("templates/_cart.php");
    /* include shopping cart*/

    /* include latest product*/
    include("templates/latest-products.php");
    /* include latest product*/

?>
<?php
    include('footer.php');
?>