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
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=sucursales&a=actualizar" autocomplete="off">

				<input type="hidden" id="id_sucursal" name="id_sucursal" value="<?php echo $data["id_sucursal"]; ?>" />

				<div class="form-group mb-3">
					<label for="nombre_sucursal">Nombre</label>
					<input type="text" class="form-control" id="nombre_sucursal" name="nombre_sucursal" value="<?php echo $data["sucursales"]["nombre_sucursal"]?>" />
				</div>
				
                <div class="form-group mb-3">
					<label for="direccion_sucursal">Direccion</label>
					<input type="text" class="form-control" id="direccion_sucursal" name="direccion_sucursal" value="<?php echo $data["sucursales"]["direccion_sucursal"]?>" />
				</div>
				
				<div class="form-group mb-3">
					<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				</div>
				
			</form>
		</body>
	</html>		