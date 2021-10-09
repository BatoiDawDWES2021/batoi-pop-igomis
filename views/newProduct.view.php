<?php
    require_once('partials/head.view.php');
    require_once('partials/navigation.view.php');
    require_once('partials/header.view.php');
?>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <form method="POST" action="newProduct.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nom:</label>
                    <input name="name" type="text" class="form-control <?= isValidClass('name',$errors) ?>" id="title" aria-describedby="titleHelp" placeholder="Enter Name" value="<?= $old_name??'' ?>">
                    <small id="nameHelp" class="form-text text-muted">El teu nom</small>
                    <?= showError('name',$errors) ?>
                </div>
                <div class="form-group">
                    <label for="dprice">Discount Price:</label>
                    <input name="dprice" type="number" class="form-control <?= isValidClass('dprice',$errors) ?>" id="dprice" aria-describedby="dpriceHelp" placeholder="Enter Discount Price" value="<?= $old_dprice??'' ?>">
                    <small id="dPriceHelp" class="form-text text-muted">Discount Price.</small>
                    <?= showError('dprice',$errors) ?>
                </div>
                <div class="form-group">
                    <label for="price">Original Price:</label>
                    <input name="price" type="number" class="form-control <?= isValidClass('price',$errors) ?>" id="price" aria-describedby="priceHelp" placeholder="Enter Original" value="<?= $old_price??'' ?>">
                    <small id="priceHelp" class="form-text text-muted">Original Price.</small>
                    <?= showError('price',$errors) ?>
                </div>
                <div class="form-group">
                    <label for="stars">Stars:</label>
                    <input name="stars" type="nuber" class="form-control <?= isValidClass('stars',$errors) ?>" id="stars" aria-describedby="starsHelp" placeholder="Enter Stars" value="<?= $old_stars??'' ?>">
                    <small id="starsHelp" class="form-text text-muted">Nombre d'estreles.</small>
                    <?= showError('stars',$errors) ?>
                </div>
                <select class="form-control" name="category">
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category->getId() ?>"><?= $category->getName() ?></option>
                    <?php endforeach ?>
                </select>
                <div class="form-group">
                    <label for="PhotoFile">Puja Foto</label>
                    <input type="file" name="photo" class="form-control-file" id="PhotoFile">
                </div>
                <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</section>
<?php
    require_once('partials/footer.view.php');
?>