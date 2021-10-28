<?php
require_once('../../kernel.php');

require_once('../../Services/loadService.php');
$query = require_once('../../bootstrap.php');
use BatoiPOP\exceptions\CheckFieldException;
use BatoiPOP\Product;


$errors = [];
if (isPost() && cfsr()){
    try {
        $name = isRequired('name');
        $discount_price = isBetween('dprice',0);
        $original_price = isBetween('price',$discount_price);
        $stars = isBetween('stars',1,5);
        $img = saveFile('photo','image/png','images');
    } catch (CheckFieldException $e){
        $errors[$e->getField()] = $e->getMessage();
    }

    if (!count($errors)){
        $query->update('productes',compact('name','original_price','discount_price','stars','img'),'id',$_POST['id']);
        header('location:/products/index.php');
    }
}
$id = $_REQUEST['id'];
$product = $query->findById('productes',$id);
loadView('products/form',compact('menu','categories','errors','product'));


