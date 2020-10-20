<?php
/*
NOTA:   OPERADORES TERNARIOS
    EVALUA UN CONDICIÓN
        Un operador ternario es un operador el cual tiene tres operandos o argumentos. 
        Usando este operador podemos pasar de tener varias líneas de código a tener una sola.

    EXAMPLE:
        variable = condición ? valor si cierto : valor si falso
    Operador ternario
    $horario_de_apertura = (dia == $FIN_DE_SEMANA) ? 10 : 8;

    condicional if
    $horario_de_apertura;
    if ($dia == $FIN_DE_SEMANA){
        $horario_de_apertura = 10;
    }else{
        $horario_de_apertura = 8;
    }
*/
if(isset($_POST)){
    /*RECOLECCIÓN DE LA INFORMACIÓN DEL FORMULARIO*/
    //  condicional if
    if(isset($_POST['nombre'])){
        $name = $_POST['nombre'];
    }else{
        $name = false;
    }
    //  operador ternario
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;
    
    //  array de errores
    $errores = array();

    // validar los datos antes de almacenar en la base de datos
    if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){
        $validate_name = true;
    } else{
        $validate_name = false;
        $errores['nombre'] = 'El nombre no es valido';
    }

    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $validate_apellidos= true;
    } else{
        $validate_apellidos = false;
        $errores['apellidos'] = 'los apellidos no son validos';
    }

    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $validate_email = true;
    } else{
        $validate_email = false;
        $errores['email'] = 'El email no es valido';
    }

    if(!empty($password)){
        $validate_password = true;
    } else{
        $validate_password = false;
        $errores['password'] = 'La contraseña esta vacia';
    }

    $save_user = false;
    if(count($errores) == 0){
        //  INSERTAR USUARIO EN LA BASE DE DATOS EN LA TABLA DE USUARIOS
        $save_user =  true;
    }else{

    }
}
