<?php
    use BatoiPOP\Category;
    use BatoiPOP\Product;

    //require_once($route_config.'products.php');
    require_once ($route_config.'menu.php');
    require_once ($route_config.'categories.php');
    $categories = Category::import($categories);

    if (isset($show)){
        switch ($show){
            case 'all': $products = Product::import($query->selectAll('productes',9999)); break;
            case 'populars': $products = Product::import($query->selectWhere('productes','stars',5)); break;
            case 'news': $products = Product::import($query->selectAllOrder('productes',8,'createdAt')); break;;
            default: $products = Product::import($query->selectAll('productes',$show));
        }
    }



