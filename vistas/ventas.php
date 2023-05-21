<?php

session_start();
if (isset($_SESSION['usuario'])) {


?>

  <!DOCTYPE html>
  <html lang="en">

  <head>

    <title>Ventas</title>
    <?php require_once "menu.php"; ?>
  </head>

  <body>
    <div class="container">
      <h1>Venta de Productos</h1>
      <div class="row">
        <div class="col-sm-12">
          <span class="btn btn-default" id="ventasProductosBtn">Vender Producto</span>
          <span class="btn btn-default" id="ventasHechasBtn">Ventas Echas</span>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div id="ventasProductos"></div>
          <div id="ventasHechas"></div>
        </div>
      </div>
    </div>

  </body>

  </html>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#ventasProductosBtn').click(function() {
        esconderSeccionVenta();
        $('#ventasProductos').load('ventas/ventasDeProductos.php');
        $('#ventasProductos').show();

      });

      $('#ventasHechasBtn').click(function() {
        esconderSeccionVenta();
        $('#ventasHechas').load('ventas/ventasyReportes.php');
        $('#ventasHechas').show();
      });
    });

    function esconderSeccionVenta(){
      $('#ventasProductos').hide();
      $('#ventasHechas').hide();

    }
  </script>

<?php
} else {

  header("location:../index.php");
}

?>