<?php
    require_once ('../kernel.php');
    $query = require_once ('../bootstrap.php');
    require_once('../Services/loadService.php');



    loadView('index',compact('menu','products','categories'));
