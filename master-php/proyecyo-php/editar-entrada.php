<?php 
require_once 'includes/redireccion.php';
require_once 'includes/conexion.php';
require_once 'includes/helpers.php';

$entrada_actual = getOnePost($db, $_GET['id']);

if(!isset($entrada_actual['id'])){
    header('Location: index.php');
}
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Editar entrada</h1>
	<p>
		Edita tu entrada <?=$entrada_actual['titulo']?>
	</p>
	<br/>
	<form action="guardar-entrada.php?editar=<?=$entrada_actual['id']?>" method="POST">
		<label for="titulo">Titulo:</label>
		<input type="text" name="titulo" value="<?=$entrada_actual['titulo']?>"/>
		<?php echo isset($_SESSION['errores_entrada']) ? showError($_SESSION['errores_entrada'], 'titulo') : ''; ?>
		
		<label for="descripcion">Descripción:</label>
		<textarea name="descripcion"><?=$entrada_actual['descripcion']?></textarea>
		<?php echo isset($_SESSION['errores_entrada']) ? showError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
		
		<label for="categoria">Categoría</label>
		<select name="categoria">
			<?php 
				$categorias = listcategory($db); 
				if(!empty($categorias)):
				while($categoria = mysqli_fetch_assoc($categorias)): 
			?>
			<option value="<?=$categoria['id']?>" <?=($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected="selected"' : '' ?>>
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
</div> <!--fin principal-->

<?php require_once 'includes/footer.php'; ?>