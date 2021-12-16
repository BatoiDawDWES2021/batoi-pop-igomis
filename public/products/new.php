<?php
    require_once('../../kernel.php');

    require_once('../../Services/loadService.php');
    use BatoiPOP\exceptions\CheckFieldException;
    use BatoiPOP\Product;

    $errors = [];
    if (isPost() && cfsr()){
        try {
            $name = isRequired('name');
            $discount_price = isBetween('dprice',0);
            $original_price = isBetween('price',$discount_price);
            $stars = isBetween('stars',1,5);
            $sale = 0;
            $img = saveFile('photo','image/png','images');
            $category = $_POST['category'];
        } catch (CheckFieldException $e){
            $errors[$e->getField()] = $e->getMessage();
        }

       if (!count($errors)){
           $query = require_once('../../bootstrap.php');
           $query->insert('productes',compact('name','original_price','discount_price','sale','stars','img','category'));
           header('location:/products/index.php');
       }
    }
    $product = new Product();
    loadView('products/form',compact('menu','categories','errors','product'));
