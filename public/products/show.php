<?php
    require_once('../../kernel.php');

    $query = require_once('../../bootstrap.php');
    require_once('../../Services/loadService.php');
    $id = $_GET['id'];
    $validProduct = $query->findById('productes',$id);
    loadView('products/show',compact('menu','categories','validProduct'));
