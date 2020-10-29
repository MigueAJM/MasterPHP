<?php 
    require_once 'includes/cabecera.php'; 
    require_once 'includes/lateral.php'; 

    $categoria_actual = getCategory($db, $_GET['id']);
    if(!isset($categoria_actual['id'])){
        header('Location: index.php');
    };
?>
		
<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Entradas de <?=$categoria_actual['nombre']?></h1>
	
	<?php 
		$entradas = getPost($db, null, $_GET['id']);
		if(!empty($entradas)):
			while($entrada = mysqli_fetch_assoc($entradas)):
	?>
				<article class="entrada">
					<a href="entrada.php?id=<?=$entrada['id']?>">
						<h2><?=$entrada['titulo']?></h2>
						<span class="fecha"><?=$entrada['Categoria'].' | '.$entrada['fecha']?></span>
						<p>
							<?=substr($entrada['descripcion'], 0, 180)."..."?>
						</p>
					</a>
				</article>
	<?php
			endwhile;
		else:
	?>
		<div class="alerta">No hay entradas en esta categoria</div>
	<?php endif; ?>
</div> <!--fin principal-->
			
<?php require_once 'includes/footer.php'; ?>