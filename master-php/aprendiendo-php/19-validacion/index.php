<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formulario PHP</title>
</head>
<body>
    <h1>Validar formularios en PHP</h1>
    <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'faltan_datos'){
                echo '<strong style="color:red">Introduce todos los campos del formulario</strong>';
            }
            if($error == 'nombre'){
                echo '<strong style="color:red">Introduce bien el nombre</strong>';
            }
            if($error == 'apellidos'){
                echo '<strong style="color:red">Introduce bien los apellidos</strong>';
            }
            if($error == 'edad'){
                echo '<strong style="color:red">La edad no es valida</strong>';
            }
            if($error == 'email'){
                echo '<strong style="color:red">El email es incorrecto</strong>';
            }
            if($error == 'Password'){
                echo '<strong style="color:red">Introduce una contraseña de mas de 5 caracteres</strong>';
            }
        }
    ?>
    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre: </label><br/>
        <input type="text" name="nombre" required="required" pattern="[a-zA-Z ]+"/><br/>

        <label for="apellidos">Apellidos: </label><br/>
        <input type="text" name="apellidos" required="required" pattern="[a-zA-Z ]+"/><br/>

        <label for="edad">Edad: </label><br/>
        <input type="number" name="edad" required="required" pattern="[0-9]+"/><br/>
       
        <label for="email">Email: </label><br/>
        <input type="text" name="email" required="required"/><br/>

        <label for="pass">Contraseña: </label><br/>
        <input type="password" name="pass" required="required" minlength="5"/><br/>

        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>