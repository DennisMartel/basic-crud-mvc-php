<?php include_once BASE_APP . '/views/custom/header.php'; ?>

<?php include_once BASE_APP . '/views/custom/navbar.php'; ?>

<div class="container">
    <div class="flex-button">
        <a href="<?php echo BASE_URL ?>/Main/listarProductos" class="btn waves-effect waves-light blue darken-1" type="submit">ver listado de productos
            <i class="material-icons right">arrow_back</i>
        </a>
    </div>
    <div class="card form-box">
        <form action="<?php echo BASE_URL?>/Main/agregarProducto" method="POST">
            <h4 class="title-form">Registrar Producto</h4>
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" class="validate" name="nombre_producto">
                    <label for="">nombre producto</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" class="validate" name="marca">
                    <label for="">marca</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" class="validate" name="tipo">
                    <label for="">tipo</label>
                </div>
            </div>
            <div class="flex-button">
                <button class="btn waves-effect waves-light green darken-2" type="submit">agregar producto
                    <i class="material-icons right">add</i>
                </button>
            </div>
        </form>
    </div>
</div>

<?php include_once BASE_APP . '/views/custom/footer.php'; ?>