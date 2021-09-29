<?php
    require_once ('../kernel.php');
    $errors = [];
    if (isPost() && cfsr()){
       $user = isRequired('user',$errors);
       $password = isRequired('password',$errors);
       $password2 = isRequired('password2',$errors);
       if ($password != $password2) {
           $errors['password2'] = 'No és el mateix password';
       }
       if (!count($errors)){
           header('Location: /');
           die();
       }
    }

    loadView('register',compact('errors'));
