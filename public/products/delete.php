<?php
    require_once('../../kernel.php');
    $query = require_once('../../bootstrap.php');
    $id = $_GET['id'];
    $query->deleteById('productes','id',$id);
    header('location:/products/index.php');

