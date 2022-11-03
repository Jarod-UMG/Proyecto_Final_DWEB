<?php
require_once "views/Inicio.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $data["titulo"]; ?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<div class="container content">
		<h2><?php echo $data["titulo"]; ?></h2>

		<form id="nuevo" name="nuevo" method="POST" action="vistas.php?c=medicamentos&a=guarda" autocomplete="off" enctype="multipart/form-data">

			<div class="form-group mb-3">
				<label for="imagen">Agregue una imagen</label>
				<input type="file" class="form-cotrol-file" id="imagen" name="imagen"></input>
			</div>

			<div class="form-group mb-3">
				<label for="nombre_medicamento">Nombres</label>
				<input type="text" class="form-control" id="nombre_medicamento" name="nombre_medicamento" />
			</div>

			<div class="form-group mb-3">
				<label for="precio_u">Precio Unitario</label>
				<input type="text" class="form-control" id="precio_u" name="precio_u" />
			</div>

			<div class="form-group mb-3">
				<label for="cantidad_stock">Cantidad Stock</label>
				<input type="text" class="form-control" id="cantidad_stock" name="cantidad_stock" />
			</div>

			<div class="form-group mb-3">
				<label for="cantidad_vendida">Cantidad Vendida</label>
				<input type="text" class="form-control" id="cantidad_vendida" name="cantidad_vendida" />
			</div>

			<div class="form-group mb-3">
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
			</div>

		</form>
	</div>
</body>

</html>