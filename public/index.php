<?php
    require_once ('../kernel.php');
    require_once($route_config.'products.php');
    require_once ($route_config.'menu.php');
    loadView('index',compact('menu','products'));
