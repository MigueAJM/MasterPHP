<?php
function showError($errores, $campo){
    $alert = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alert = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
    }
    return $alert;
}

function removeError(){
    $remove = false;
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        unset($_SESSION['errores']);
        $remove = true;
    }
    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        unset($_SESSION['completado']);
        $remove = true;
    }
    return $remove;
}

function listCategory($conexion){
    $sql = "SELECT  * FROM categorias ORDER BY id ASC";
    $category = mysqli_query($conexion, $sql);

    $result = array();
    if($category && mysqli_num_rows($category) >= 1){
        $result = $category;
    }

    return $result;
}
