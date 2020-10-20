<?php
function showError($errores, $campo){
    $alert = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alert = "<div class='alerta alerta-error'>".$errores[$campo].'<div>';
    }
    return $alert;
}

function removeError(){
    $_SESSION['errores'] = null;
    $remove = session_unset();
    return $remove;
}