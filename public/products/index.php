<?php
    require_once('../../kernel.php');
    $query = require_once('../../bootstrap.php');
    $show = 99999;
    require_once('../../Services/loadService.php');

    loadView('products/index',compact('menu','products'));
