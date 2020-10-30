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

function listcategory($conexion){
    $sql = "SELECT  * FROM categorias ORDER BY id ASC";
    $categorias = mysqli_query($conexion, $sql);

    $result = array();
    if($categorias && mysqli_num_rows($categorias) >= 1){
        $result = $categorias;
    }

    return $result;
}

function getCategory($conexion, $id){
    $sql = "SELECT  * FROM categorias WHERE id = $id";
    $categorias = mysqli_query($conexion, $sql);

    $result = array();
    if($categorias && mysqli_num_rows($categorias) >= 1){
        $result = mysqli_fetch_assoc($categorias);
    }

    return $result;
}

function getOnePost($conexion, $id){
    $sql = "SELECT e.*, c.nombre AS 'Categoria', CONCAT(u.nombre, ' ', u.apellidos) AS 'autor' FROM entradas e ".
            "INNER JOIN categorias c ON e.categoria_id = c.id ".
            "INNER JOIN usuarios u ON e.usuario_id = u.id ".
            "WHERE e.id = $id";
    $entrada = mysqli_query($conexion, $sql);
    /*
        $error = mysqli_error($conexion);
        var_dump($error);
        die();
    */
    $result = array();

    if($entrada && mysqli_num_rows($entrada) >= 1){
        $result = mysqli_fetch_assoc($entrada);
    }

    return $result;
}

function getPost($conexion, $limit = null, $categoria = null, $busqueda = null){
    $sql = "SELECT e.*, c.nombre AS 'Categoria' FROM entradas e ".
            "INNER JOIN  categorias c ON e.categoria_id = c.id ";
    
    if(!empty($categoria)){
        $sql .= "WHERE e.categoria_id = $categoria ";
    }   

    if(!empty($busqueda)){
        $sql .= "WHERE e.titulo LIKE '%$busqueda%' ";
        ;
    }

    $sql .= "ORDER BY e.id DESC ";

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