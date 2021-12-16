<div class="col mb-5">
    <div class="card h-100">
        <!-- Sale badge-->
        <?php if ($validProduct->sale): ?>
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
        <?php endif; ?>
        <?php if ($validProduct->category): ?>
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><a href="/?show=categories&category=<?= $validProduct->category ?>"><?= $categories[$validProduct->category-1]->getName() ?></a></div>
        <?php endif; ?>
        <!-- Product image-->
        <?php if ($validProduct->img): ?>
            <img class="card-img-top" height="300px" src="<?= $validProduct->img ?>" alt="..." />
        <?php else: ?>
            <img class="card-img-top" src="http://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
        <?php endif; ?>
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder"><?= $validProduct->name ?></h5>
                <!-- Product reviews-->
                <div class="d-flex justify-content-center small text-warning mb-2">
                    <?php for($i=0;$i<$validProduct->stars;$i++): ?>
                        <div class="bi-star-fill"></div>
                    <?php endfor ?>
                </div>
                <!-- Product price-->
                <?= $validProduct->discount_price??'' ?>
                <?= isset($validProduct->original_price)
                    ?'<span class="text-muted text-decoration-line-through">'.$validProduct->original_price.'</span>'
                    :$validProduct->original_price
                ?>
            </div>
        </div>
    </div>
</div>
