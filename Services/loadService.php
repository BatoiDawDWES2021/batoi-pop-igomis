<?php
    use BatoiPOP\Category;
    use BatoiPOP\Product;

    //require_once($route_config.'products.php');
    require_once ($route_config.'menu.php');
    $categories = Category::import($query->selectAll('categories',9999));

    if (isset($show)){
        switch ($show){
            case 'all': $products = Product::import($query->selectAll('productes',9999)); break;
            case 'populars': $products = Product::import($query->selectWhere('productes','stars',5)); break;
            case 'news': $products = Product::import($query->selectAllOrder('productes',8,'createdAt')); break;;
            case 'categories' : $products = Product::import($query->selectWhere('productes','category',$category)); break;
            default: $products = Product::import($query->selectAll('productes',$show));
        }
    }



