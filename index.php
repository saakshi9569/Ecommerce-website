<?php
    include('header.php');
    ob_start();
?>
    <div class="Categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3"><img src="images/category-1.jpg"></div>
                <div class="col-3"><img src="images/category-2.jpeg"></div>
                <div class="col-3"><img src="images/category-3.jpg"></div>
            </div>
        </div>
    </div>

<?php
    /* include featured product*/
    include("templates/featured-products.php");
    /* include featured product*/

    /* include latest product*/
    include("templates/latest-products.php");
    /* include latest product*/

    /* include testimonials*/
    include("templates/testimonials.php");
    /* include testimonial*/
?>

<?php
    include('footer.php');
?>