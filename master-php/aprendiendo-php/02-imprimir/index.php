<!DOCTYPE HTML>
<html>
    <head>
        <meta/>
        <title>Imprimir por pantalla -.Master en PHP</title>
    </head>
    <body>
        <h1>Master en PHP - victorroblesweb.es</h1>
        <?="Bienvenido al curso mas grande de PHP"?>
        <?php
            //  Titular de la seccion
            echo "<h3>Listado de videojuegos:</h3>";
            /*
                Esta es una lista
                de videojuegos
                modernos
            */
            echo "<ul>"
                . "<li>GTA</li>"
                . "<li>Fifa</li>"
                . "<li>Mario Bros</li>"
                . "</ul>";
            //  Parrafo explicativo
            echo '<p>Esta es toda'. ' - '.'lista de juegos </p>';
        ?>
    </body>
</html>