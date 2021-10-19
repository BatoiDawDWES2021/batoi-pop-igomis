<?php
    require_once ('../kernel.php');
    require_once('../Services/loadService.php');

    $query = require_once ('../bootstrap.php');

    loadView('index',compact('menu','products','categories'));
