<?php
    require_once('partials/head.view.php');
    require_once('partials/header.view.php');
?>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <form method="POST" action="login.php" >
                <div class="form-group">
                    <label for="user">Login:</label>
                    <input name="user" type="text" class="form-control <?= isValidClass('user',$errors) ?>" id="user"  placeholder="Enter user" value="<?= $old_user??'' ?>">
                    <?= showError('user',$errors) ?>
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" id="password"  placeholder="Enter password">
                </div>
                <a href="register.php" class="btn btn-dark">Register</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>
<?php
    require_once('partials/footer.view.php');
?>