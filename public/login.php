<?php
    require_once ('../kernel.php');
    $errors = [];
    if (isPost() && cfsr()){
       $user = isRequired('user',$errors);
       $password = isRequired('password',$errors);
       if (!count($errors)){
           header('Location: /');
           die();
       }
    }

    loadView('login',compact('errors'));
