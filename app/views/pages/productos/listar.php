<?php include_once BASE_APP . '/views/custom/header.php'; ?>

<?php include_once BASE_APP . '/views/custom/navbar.php'; ?>

<div class="container">
    <div class="flex-button">
        <a href="<?php echo BASE_URL?>/Main/agregarProducto" class="btn waves-effect waves-light blue darken-1" type="submit">agregar producto
            <i class="material-icons right">add</i>
        </a>
    </div>
    <table class="responsive-table">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>marca</th>
                <th>tipo</th>
                <th>fecha registro</th>
                <th colspan="2">operaciones</th>
            </tr>
        </thead>
        <?php foreach($data['productos'] as $productsData):?>
            <tbody>
                <td><?php echo $productsData->id_producto?></td>
                <td><?php echo $productsData->nombre_producto?></td>
                <td><?php echo $productsData->marca?></td>
                <td><?php echo $productsData->tipo?></td>
                <td><?php echo $productsData->fecha_registro?></td>
                <td>
                    <a href="<?php echo BASE_URL?>/Main/deleteProduct/<?php echo $productsData->id_producto?>" class="btn waves-effect waves-light red darken-1">
                        <i class="material-icons">delete</i>
                    </a>
                </td>
                <td>
                    <a href="<?php echo BASE_URL?>/Main/updateProduct/<?php echo $productsData->id_producto?>" class="btn waves-effect waves-light green darken-1">
                        <i class="material-icons">undo</i>
                    </a>
                </td>
            </tbody>
        <?php endforeach;?>
    </table>
</div>

<?php include_once BASE_APP . '/views/custom/footer.php'; ?>