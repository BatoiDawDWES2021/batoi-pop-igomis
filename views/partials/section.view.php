<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach ($products as $product): ?>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <?php if ($product->sale) : ?>
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <?php endif ?>
                    <!-- Product image-->
                    <img class="card-img-top" src="<?= $product->img??'http://dummyimage.com/450x300/dee2e6/6c757d.jpg' ?>" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder"><?= $product->getName() ?></h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <?php for($i=0;$i<$product->stars;$i++): ?>
                                    <div class="bi-star-fill"></div>
                                <?php endfor ?>
                            </div>
                            <!-- Product price-->
                            <?= $product->discount_price??'' ?>
                            <?= isset($product->discount_price)
                                ?'<span class="text-muted text-decoration-line-through">'.$product->original_price.'</span>'
                                :$product->original_price
                            ?>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Mostrar</a></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
