<?php
    use BatoiPOP\Category;
    use BatoiPOP\Product;

    require_once($route_config.'products.php');
    require_once ($route_config.'menu.php');
    require_once ($route_config.'categories.php');
    $categories = Category::import($categories);
    $products = Product::import($products);
    
