<?php
    require_once(dirname(__FILE__) .'/../partials/head.view.php');
    require_once(dirname(__FILE__) .'/../partials/navigation.view.php');
    require_once(dirname(__FILE__) .'/../partials/header.view.php'); ?>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th><th scope="col">Name</th><th>Actions <a href="new.php" class="btn btn-sm btn-dark">New</a></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= $product->getId() ?></td><td><?= $product->getName() ?></td>
                            <td>
                                <a href="/products/delete.php?id=<?= $product->getId() ?>"><i class="bi bi-trash"></i></a>
                                <a href="/products/update.php?id=<?= $product->getId() ?>"><i class="bi bi-pencil"></i></a>
                                <a href="/products/show.php?id=<?= $product->getId() ?>"><i class="bi bi-eye"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <?php require_once(dirname(__FILE__) .'/../partials/footer.view.php'); ?>
