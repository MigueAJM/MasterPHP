<?php
// INICIAR LA SESIÓN Y LA CNEXIÓN A LA BASE DE DATOS
require_once 'includes/conexion.php';

// RECOGER DATOS DEL FORMULARIO
if(isset($_POST)){

    //borrar error antigua
    if(isset($_SESSION['error_login'])){
        unset($_SESSION['error_login']);
    }

    //recolectar datos
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // CONSULTA PARA COMPROBAR LAS CREDENCIALES
    $sql = "SELECT * FROM usuarios WHERE email= '$email'";
    $login = mysqli_query($db, $sql);
    if($login && mysqli_num_rows($login) == 1){     // mysqli_num_rows retorna el nuem retorna el numero de filas
        $usuario = mysqli_fetch_assoc($login);
     
        //COMPROBAR LA CONTRASEÑA
        $verify = password_verify($password, $usuario['password']);

        if($verify){
            // UTILIZAR UNA SESIÓN PARA GUARDAR LOS DATOS DEL USUARIO LOGUEADO
            $_SESSION['usuario'] = $usuario;
        }else{
            // SI ALGO FALLA, ENVIAR UNA SESIÓN CON EL FALLO
            $_SESSION['error_login'] = 'Login incorrecto!!';
        }
    }else{
        // mensaje de error
        $_SESSION['error_login'] = 'Login incorrecto!!';
    }
}
header('Location:index.php');




// REDIRECCIONAR AL INDEX.PHP