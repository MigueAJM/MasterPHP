<?php 
    require_once 'includes/redireccion.php';
    require_once 'includes/cabecera.php';    
    require_once 'includes/lateral.php';
?>

<!--CAJA PRINCIPAL-->
<div id="principal">
    <h1>Crear categorias</h1>
    <p>
        Añade nuevas categorias al blog para que los usuarios puedan usarlas
        al crear entradas.
    </p>
    <br/>

    <form action="guardar-categoria.php" method="POST">
        <label for="nombr4e">Nombre de la categoria: </label>
        <input type="text" name="nombre" />

        <input type="submit" value="Guardar" />
    </form>
</div>

<?php require_once 'includes/footer.php'; ?>