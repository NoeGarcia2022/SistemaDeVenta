<?php
require_once "../../clases/conexion.php";
$c = new conectar();
$conexion = $c->conexion();
?>

<h4>Vender un Producto</h4>
<div class="row">
    <div class="col-sm-4">
        <form id="frmVentasProductos">
            <label>Selecciona Cliente</label>
            <select name="clienteVenta" id="clienteVenta" class="form-control input-sm">
                <option value="A">Selecciona</option>
                <option value="0">Sin cliente</option>
                <?php
                $sql = "SELECT id_cliente,nombre,apellido
                            from clientes";
                $result = mysqli_query($conexion, $sql);
                while ($cliente = mysqli_fetch_row($result)) :
                ?>
                    <option value="<?php echo $cliente[0] ?>">
                        <?php echo $cliente[2] . " " . $cliente[1] ?>
                    </option>
                <?php endwhile; ?>
            </select>
            <label>Producto</label>
            <select name="" id="productoVenta" class="form-control input-sm">
                <option value="A">Selecciona</option>
                <?php
                $sql = "SELECT id_producto,
                                nombre
                        FROM articulos";
                $result = mysqli_query($conexion, $sql);
                while ($producto = mysqli_fetch_row($result)) :
                ?>
                    <option value="<?php echo $producto[0] ?>">
                        <?php echo $producto[1] ?>
                    </option>
                <?php endwhile; ?>
            </select>
            <label>Descripcion</label>
            <textarea readonly="" name="descripcionV" id="descripcionV" class="form-control input-sm"></textarea>
            <label>Cantidad</label>
            <input readonly="" type="text" class="form-control input-sm" name="cantidadV" id="cantidadV">
            <label>Precio</label>
            <input readonly="" type="text" class="form-control input-sm" name="precioV" id="precioV">
            <p></p>
            <span class="btn btn-primary" id="btnAgregaVenta">Agregar</span>
        </form>
    </div>
    <div class="col-sm-3">
        <div id="imgProducto"></div>
    </div>
    <div class="col-sm-4">
        <div id="tablaVentasTempLoad"></div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {

        $('#tablaVentasTempLoad').load("ventas/tablaVentasTemp.php");

        $('#productoVenta').change(function() {
            $.ajax({
                type: "POST",
                data: "idproducto=" + $('#productoVenta').val(),
                url: "../procesos/ventas/llenarFormProducto.php",
                success: function(r) {
                    dato = jQuery.parseJSON(r);
                    $('#descripcionV').val(dato['descripcion']);
                    $('#cantidadV').val(dato['cantidad']);
                    $('#precioV').val(dato['precio']);

                    $('#imgProducto').prepend('<img class="img-thumbnail" id="imgp" src = "' + dato['ruta'] + '" / > ');
                }
            });
        });

        $('#btnAgregaVenta').click(function() {
            vacios = validarFormVacio('frmVentasProductos');

            if (vacios > 0) {
                alertify.alert("Debes llenar todos los campos!!");
                return false;
            }
            datos = $('#frmVentasProductos').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "../procesos/ventas/agregaProductoTemp.php",
                success: function(r) {

                }
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#clienteVenta').select2();
        $('#productoVenta').select2();
    })
</script>