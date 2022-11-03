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
		<form id="nuevo" name="nuevo" method="POST" action="vistas.php?c=clientes&a=guarda" autocomplete="off">

			<div class="form-group mb-3">
				<label for="nit">Nit</label>
				<input type="text" class="form-control" id="nit" name="nit" />
			</div>

			<div class="form-group mb-3">
				<label for="nombre_cliente">Nombres</label>
				<input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" />
			</div>

			<div class="form-group mb-3">
				<label for="apellido_cliente">Apellidos</label>
				<input type="text" class="form-control" id="apellido_cliente" name="apellido_cliente" />
			</div>

			<div class="form-group mb-3">
				<label for="telefono">Telefono</label>
				<input type="text" class="form-control" id="telefono" name="telefono" />
			</div>
			
			<div class="form-group mb-3">
				<label for="usuario">Usuario</label>
				<input type="text" class="form-control" id="usuario" name="usuario" />
			</div>

			<div class="form-group mb-3">
				<label for="contra">Contraseña</label>
				<input type="text" class="form-control" id="contra" name="contra" />
			</div>

			<div class="form-group mb-3">
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
			</div>

		</form>
	</div>
</body>

</html>