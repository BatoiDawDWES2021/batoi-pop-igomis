<?php

function dd(...$variable){
     foreach ($variable as $var){
         var_dump($var);
         echo "<br/>";
     }
     die();
}

function isPost(){
    return ($_SERVER["REQUEST_METHOD"] === "POST");
}

function loadView($vista,$params){
    extract($params);
    require_once($_SERVER['DOCUMENT_ROOT'].'/../views/'."$vista.view.php");
}