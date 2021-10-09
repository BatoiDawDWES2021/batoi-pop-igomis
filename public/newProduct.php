<?php
    require_once ('../kernel.php');
    require_once ('../Services/loadService.php');
    use BatoiPOP\exceptions\CheckFieldException;

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
           loadView('validateProduct',compact('menu','name','dprice','price','stars','category','photo','categories'));
           die();
       }
    }

    loadView('newProduct',compact('menu','categories','errors'));
