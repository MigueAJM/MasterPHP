<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formulario PHP</title>
</head>
<body>
    <h1>Validar formularios en PHP</h1>

    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre: </label><br/>
        <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"/><br/>

        <label for="apellidos">Apellidos: </label><br/>
        <input type="text" name="apellidos" required="required" pattern="[A-Za-z]+"/><br/>

        <label for="edad">Edad: </label><br/>
        <input type="number" name="edad" required="required" pattern="[0-9]+"/><br/>

        <label for="email">Email: </label><br/>
        <input type="email" name="email" required="required"/><br/>

        <label for="pass">Contraseña: </label><br/>
        <input type="password" name="pass" required="required"/><br/>

        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>