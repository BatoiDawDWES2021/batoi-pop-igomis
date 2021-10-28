<?php
require_once(dirname(__FILE__) .'/../partials/head.view.php');
require_once(dirname(__FILE__) .'/../partials/navigation.view.php');
require_once(dirname(__FILE__) .'/../partials/header.view.php');
?>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
                 require(dirname(__FILE__) .'/fitxaProduct.view.php');
            ?>
        </div>
    </div>
</section>
<?php require_once(dirname(__FILE__) .'/../partials/footer.view.php'); ?>