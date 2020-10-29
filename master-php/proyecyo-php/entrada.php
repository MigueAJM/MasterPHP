<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
	$entrada_actual = getOnePost($db, $_GET['id']);

	if(!isset($entrada_actual['id'])){
		header("Location: index.php");
	}
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>
		
<!-- CAJA PRINCIPAL -->
<div id="principal">
    <h1><?=$entrada_actual['titulo']?></h1>
    <a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>">
        <h2><?=$entrada_actual['Categoria']?></h2>
    </a>
    <h4><?=$entrada_actual['fecha']?></h4>
    <p>
        <?=$entrada_actual['descripcion']?>
    </p>
</div> <!--fin principal-->
			
<?php require_once 'includes/footer.php'; ?>