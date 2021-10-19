<?php
    require_once ('../kernel.php');
    require_once ('../Services/loadService.php');
    use BatoiPOP\exceptions\CheckFieldException;
    use BatoiPOP\Product;


    $errors = [];
    if (isPost() && cfsr()){
        try {
            $name = isRequired('name');
            $dprice = isBetween('dprice',0);
            $price = isBetween('price',$dprice);
            $stars = isBetween('stars',1,5);
            $category = $_POST['category'];
            $photo = saveFile('photo','image/png','images');
        } catch (CheckFieldException $e){
            $errors[$e->getField()] = $e->getMessage();
        }

       if (!count($errors)){
           $validProduct = new Product(12,$name,compact('dprice','price','stars','category','photo'));
           loadView('validateProduct',compact('menu','validProduct','categories'));
           die();
       }
    }

    loadView('newProduct',compact('menu','categories','errors'));
