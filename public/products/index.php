<?php
    require_once('../../kernel.php');
    if (!isset($user) || $user->rol != 1){
        header('location:/');
    }
    $query = require_once('../../bootstrap.php');
    $show = 99999;
    require_once('../../Services/loadService.php');

    loadView('products/index',compact('menu','products'));
