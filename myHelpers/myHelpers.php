<?php

function dd(...$variable){
     foreach ($variable as $var){
         var_dump($var);
         echo "<br/>";
     }
     die();
}

function isPost(){
    return ($_SERVER["REQUEST_METHOD"] === "POST");
}

function loadView($vista,$params){
    extract($params);
    if (isPost()) {
        extract($_POST,EXTR_PREFIX_ALL,'old');
    }
    require_once($_SERVER['DOCUMENT_ROOT'].'/../views/'."$vista.view.php");
}

function isValidClass($nomCamp,$errors){
    if (!isset($errors)) {
        return '';
    }
    if (isset($errors[$nomCamp])) {
        return 'is-invalid';
    }
    return 'is-valid';
}

function showError($nomCamp,$errors){
    if (!isset($errors)) {
        return '';
    }
    if (isset($errors[$nomCamp])) {
        return "<div class='invalid-feedback'>$errors[$nomCamp]</div>";
    }
    return "<div class='valid-feedback'>All correct</div>";
}

function saveFile($nomcamp,$type,$directori,&$errors){
    if ($_FILES[$nomcamp]['type'] == $type){
        $nomFitxer = $_FILES[$nomcamp]["name"];
        if (move_uploaded_file($_FILES[$nomcamp]["tmp_name"], "$directori/" . $nomFitxer)) {
            return $nomFitxer;
        } else {
            $errors[$nomcamp] = "No es pot pujar el fitxer";
        }
    } else {
        $errors[$nomcamp] = "Fitxer No és $type";
    }
}

function cfsr(){
    if (parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) != $_SERVER['HTTP_HOST']) die('Anti-CSRF');
    else return true;
}

function isRequired($nomCamp,&$errors){
    if (!empty($_POST[$nomCamp])) {
        return trim(htmlspecialchars($_POST[$nomCamp]));
    }
    else {
        $errors[$nomCamp] = "El $nomCamp és requerit";
        return null;
    }
}

function isBetween($nomCamp,&$errors,$min=-99999999,$max=9999999){
    if (!empty($_POST[$nomCamp]) && is_numeric($_POST[$nomCamp])) {
        if ($_POST[$nomCamp]<$min || $_POST[$nomCamp]> $max){
            $errors[$nomCamp] = "$nomCamp ha d'estar entre $min i $max";
            return null;
        }
        else {
            return $_POST[$nomCamp];
        }
    } else {
        $errors[$nomCamp] = "$nomCamp és requerit i numèric";
        return null;
    }
}