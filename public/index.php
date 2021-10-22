<?php
    CONST SHOW_DEFAULT = 8;
    require_once ('../kernel.php');
    $query = require_once ('../bootstrap.php');
    $show = $_GET['show']??SHOW_DEFAULT;
    require_once('../Services/loadService.php');

    loadView('index',compact('menu','products','categories'));
