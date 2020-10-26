<?php 
    require_once 'includes/redireccion.php';
    require_once 'includes/cabecera.php';    
    require_once 'includes/lateral.php';
?>

<!--CAJA PRINCIPAL-->
<div id="principal">
    <h1>Crear entradas</h1>
    <p>
        Añade nuevas entradas al blog para que los usuarios puedan leerlas
        y disfrutar de nuetro contenido
    </p>
    <br/>

    <form action="guardar-entrada.php" method="POST">
        <label for="titulo">Ttulo: </label>
        <input type="text" name="titulo" />
        <?php echo isset($_SESSION['errores_entrada']) ? showError($_SESSION['errores_entrada'], 'titulo') : ''; ?>

        <label for="descripcion">Descripción</label>
        <textarea name="descripcion"></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? showError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>

        <label for="categoria">Categorias</label>
        <select name="categoria">
            <?php
                $categorias  = listCategory($db);
                if(!empty($categorias)):
                    while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                        <option value="<?=$categoria['id']?>">
					        <?=$categoria['nombre']?>
				        </option>
            <?php
                    endwhile;
                endif;
            ?>
        </select>
        <?php echo isset($_SESSION['errores_entrada']) ? showError($_SESSION['errores_entrada'], 'categoria') : ''; ?>

        <input type="submit" value="Guardar" />
    </form>
    <?php removeError(); ?>
</div>

<?php require_once 'includes/footer.php'; ?>