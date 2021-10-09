<?php
    require_once ('../kernel.php');
    require_once('../Services/loadService.php');

    loadView('index',compact('menu','products','categories'));
