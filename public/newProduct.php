<?php
    require_once ('../kernel.php');
    require_once ($route_config.'menu.php');
    require_once ($route_config.'categories.php');
    $errors = [];
    if (isPost() && cfsr()){
       $name = isRequired('name',$errors);
       $dprice = isBetween('dprice',$errors,0);
       $price = isBetween('price',$errors,$dprice);
       $stars = isBetween('stars',$errors,1,5);
       $category = $_POST['category'];
       $photo = saveFile('photo','image/png','images',$errors);
       if (!count($errors)){
           loadView('validateProduct',compact('menu','name','dprice','price','stars','category','photo','categories'));
           die();
       }
    }

    loadView('newProduct',compact('menu','categories','errors'));
