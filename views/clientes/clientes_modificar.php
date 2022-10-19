<?php
require_once "views/Inicio.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	</head>
	
	<body>
		<div class="container content">		
			<h2><?php echo $data["titulo"]; ?></h2>
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=clientes&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id_cliente" name="id_cliente" value="<?php echo $data["id_cliente"]; ?>" />
				
				<div class="form-group mb-3">
					<label for="nit">Nit</label>
					<input type="text" class="form-control" id="nit" name="nit" value="<?php echo $data["clientes"]["nit"]?>" />
				</div>

				<div class="form-group mb-3">
					<label for="nombre_cliente">Nombre</label>
					<input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" value="<?php echo $data["clientes"]["nombre_cliente"]?>" />
				</div>
				
				<div class="form-group mb-3">
					<label for="apellido_cliente">Apellido</label>
					<input type="text" class="form-control" id="apellido_cliente" name="apellido_cliente" value="<?php echo $data["clientes"]["apellido_cliente"]?>" />
				</div>
				
				<div class="form-group mb-3">
					<label for="telefono">Telefono</label>
					<input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $data["clientes"]["telefono"]?>" />
				</div>
				
				<div class="form-group mb-3">
					<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				</div>

			</form>
		</body>
	</html>		