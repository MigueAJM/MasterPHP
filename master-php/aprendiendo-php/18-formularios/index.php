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

            <p><input type="submit" value="Enviar"/></p>
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
            <label for="boton">Botón:</label>
            <p><input type="button" name="boton" value="Cliclame"/></p>

            <label for="sexo">Sexo:</label>
            <p>
                <input type="checkbox" name="sexo" value="Hombre"/>
                <input type="checkbox" name="sexo" value="Mujer" checked="checked"/>
            </p>

            <label for="color">Color:</label>
            <p><input type="color" name="color"/></p>

            <label for="fecha">Fecha:</label>
            <p><input type="date" name="fecha"/></p>

            <label for="correo">Correo:</label>
            <p><input type="email" name="correo"/></p>
            
            <label for="archivo">Archivo:</label>
            <p><input type="file" name="archivo" multiple="multiple"/></p>

            <label for="numero">Número:</label>
            <p><input type="number" name="numero"/></p>

            <label for="pass">Contraseña:</label>
            <p><input type="password" name="pass"/></p>

            <label for="continente">Continente:</label>
            <p>
               America: <input type="radio" name="continente" value="America"/>
               Europa: <input type="radio" name="continente" value="Europa"/>
               Africa: <input type="radio" name="continente" value="Africa"/>
            </p>

            <label for="web">Pagina web:</label>
            <p><input type="url" name="web"/></p>

            <textarea></textarea><br/>
            Peliculas:
            <select name="peliculas">
                <option value="spiderman">spiderman</option>
                <option value="Superman">superman</option>
            </select>
        </form>
    </body>
</html>