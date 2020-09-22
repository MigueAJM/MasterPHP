<tr> 
    <?php foreach ($categorias as $categoria) : ?><!--Se recomiendo usar en las vistas usar este tipo de sintaxis =>     foreach ($categorias as $categoria): endforeach; en lugar de las llaves -->
    <th><?= $categoria ?></th> 
    <?php endforeach; ?>
</tr>