<?php
    require_once ('../kernel.php');
    use BatoiPOP\exceptions\CheckFieldException;
    use BatoiPOP\exceptions\PasswordIsNotSame;

    $errors = [];
    if (isPost() && cfsr()){
        try {
            $user = isRequired('user');
            $password = isRequired('password');
            $password2 = isRequired('password2');
            if ($password != $password2) {
                throw new PasswordIsNotSame($password2);
            }
        } catch ( CheckFieldException $e) {
            $errors[$e->getField()] = $e->getMessage();
        }

       if (!count($errors)){
           header('Location: /');
           die();
       }
    }

    loadView('register',compact('errors'));
