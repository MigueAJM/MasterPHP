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
if(isset($_POST['submit'])){
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
    var_dump($_POST);
}
