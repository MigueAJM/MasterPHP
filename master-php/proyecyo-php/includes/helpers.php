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
        $remove = true;
    }

    if(isset($_SESSION['errores_entrada'])){
        $_SESSION['errores_entrada'] = null;
        $remove = true;
    }

    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        $remove = true;
    }
    return $remove;
}

function listCategory($conexion){
    $sql = "SELECT  * FROM categorias ORDER BY id ASC";
    $categorias = mysqli_query($conexion, $sql);

    $result = array();
    if($categorias && mysqli_num_rows($categorias) >= 1){
        $result = $categorias;
    }

    return $result;
}

function getPost($conexion, $limit = null){
    $sql = "SELECT e.*, c.nombre AS 'Categoria' FROM entradas e ".
            "INNER JOIN  categorias c ON e.categoria_id = c.id ".
            "ORDER BY e.id DESC ";
    if($limit){
        $sql .= 'LIMIT 4';
    }
    
    $entradas = mysqli_query($conexion, $sql);

    $result = array();

    if($entradas && mysqli_num_rows($entradas) >= 1){
        $result =  $entradas;
    }

    return $result;
}