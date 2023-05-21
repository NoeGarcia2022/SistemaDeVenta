<?php
session_start();
if (isset($_SESSION['usuario'])) {

?>


	<!DOCTYPE html>
	<html>

	<head>
		<title>categorias</title>
		<?php require_once "menu.php"; ?>
	</head>

	<body>

		<div class="container">
			<h1>Categorias</h1>
			<div class="row">
				<div class="col-sm-4">
					<form id="frmCategorias">
						<label>Categoria</label>
						<input type="text" class="form-control input-sm" name="categoria" id="categoria">
						<p></p>
						<span class="btn btn-primary" id="btnAgregaCategoria">Agregar</span>
					</form>
				</div>
				<div class="col-sm-6">
					<div id="tablaCategoriaLoad"></div>
				</div>
			</div>
		</div>

		<!-- Button trigger modal -->


		<!-- Modal -->
		<div class="modal fade" id="actualizaCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Actualiza Categorias</h4>
					</div>
					<div class="modal-body">
						<form id="frmCategoriaU">
							<input type="text" name="idcategoria" id="idcategoria" hidden="">
							<label for="">Categoria</label>
							<input type="text" name="categoriaU" id="categoriaU" class="form-control input-sm">

						</form>


					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning" data-dismiss="modal" id="btnActualizaCategoria">Guardar</button>

					</div>
				</div>
			</div>
		</div>

	</body>

	</html>
	<script type="text/javascript">
		$(document).ready(function() {

			$('#tablaCategoriaLoad').load("categorias/tablaCategorias.php");

			$('#btnAgregaCategoria').click(function() {

				vacios = validarFormVacio('frmCategorias');

				if (vacios > 0) {
					alertify.alert("Debes llenar todos los campos!!");
					return false;
				}

				datos = $('#frmCategorias').serialize();
				$.ajax({
					type: "POST",
					data: datos,
					url: "../procesos/categorias/agregaCategoria.php",
					success: function(r) {
						if (r == 1) {
							//esta linea nos permite limpiar el formulario al insertar un registro
							$('#frmCategorias')[0].reset();
							$('#tablaCategoriaLoad').load("categorias/tablaCategorias.php");
							alertify.success("Categoria agregada con exito :D");
						} else {
							alertify.error("No se pudo agregar categoria");
						}
					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			//script para evento click y ajax 
			$('#btnActualizaCategoria').click(function() {

				datos = $('#frmCategoriaU').serialize();
				$.ajax({
					type: "POST",
					data: datos,
					url: "../procesos/categorias/actualizaCategoria.php",
					success: function(r) {
						if (r == 1) {
							$('#tablaCategoriaLoad').load("categorias/tablaCategorias.php");
							alertify.success("Actualizado con exito :)");
						}else{
							alertify.error("No se puede actualizar :(");
						}

					}
				});
			});
		});
	</script>


	<script type="text/javascript">
		function agregaDato(idCategoria, categoria) {
			$('#idcategoria').val(idCategoria);
			$('#categoriaU').val(categoria);
		}
	</script>

<?php
} else {
	header("location:../index.php");
}
?>