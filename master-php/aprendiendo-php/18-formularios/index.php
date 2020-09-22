<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <p><input type="text" name="nombre"/></p>
            <label for="apellido">Apellido:</label>
            <p><input type="text" name="apellido"/></p>
            <input type="submit" value="Enviar"/>
            <!--
                ATRIBUTO en INPUT
                    * autofocus="autofocus" 
                    * disabled="disabled" desabilitar input
                    * maxlength="10" longitud maxima
                    * minlength="5" longitud minima
                    * pattern="[A-Z]+"  Expresiones regulares
                    * required="required" requiere que contenga contenido
                    * placeholder="texto por default" texto por default
                    * value="rellenar"
            -->
        </form>
    </body>
</html>