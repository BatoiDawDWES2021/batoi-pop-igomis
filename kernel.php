<?php
// load filp/whoops
    session_start();
    $user = isset($_SESSION['user'])?unserialize($_SESSION['user']):null;

    require(dirname(__FILE__) . "/vendor/autoload.php");

    use Whoops\Run;
    use Whoops\Handler\PrettyPageHandler;

    $whoops = new Run;
    $whoops->pushHandler(new PrettyPageHandler);
    $whoops->register();

// routes
    $route_views = $_SERVER['DOCUMENT_ROOT'].'/../views/';
    $route_src = $_SERVER['DOCUMENT_ROOT'].'/../src/';
    $route_config = $_SERVER['DOCUMENT_ROOT'].'/../config/';
