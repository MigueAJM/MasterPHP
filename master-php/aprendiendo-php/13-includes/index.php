<?php 
require_once 'includes/cabecera.php';
?>

        <!--Contenido-->
        <div>
            <h2>Esta es la pagina de inicio</h2>
            <p>Texto de prueba  de la pagina de inicio</p>
        </div>
        <?php var_dump($nombre);?>
<?php
require_once 'includes/footer.php';
?>

<!--
    NOTA: 
            *include nos imprime n cantidad de veces como nosotros indiquemos el script
            *include_once solo nos mostrara una sola vez el script =>  IMPORTANTE: Al encontrar error en la ruta nos mostrara los errores
                con el codigo que este correcto
            *require == include, pero  con require solo se nos mostrara los errores si la ruta esta mal.
            *require_once == include_once
            ES RECOMENDABLE USAR "require_once"
-->