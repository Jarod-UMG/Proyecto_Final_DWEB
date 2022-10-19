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
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=medicamentos&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id_medicamento" name="id_medicamento" value="<?php echo $data["id_medicamento"]; ?>" />
				
				<div class="form-group mb-3">
					<label for="nombre_medicamento">Nombre</label>
					<input type="text" class="form-control" id="nombre_medicamento" name="nombre_medicamento" value="<?php echo $data["medicamentos"]["nombre_medicamento"]?>" />
				</div>
				
				<div class="form-group mb-3">
					<label for="precio_u">Precio Unitario</label>
					<input type="text" class="form-control" id="precio_u" name="precio_u" value="<?php echo $data["medicamentos"]["precio_u"]?>" />
				</div>
				
				<div class="form-group mb-3">
					<label for="cantidad_stock">Cantidad Stock</label>
					<input type="text" class="form-control" id="cantidad_stock" name="cantidad_stock" value="<?php echo $data["medicamentos"]["cantidad_stock"]?>" />
				</div>

                <div class="form-group mb-3">
					<label for="cantidad_vendida">Cantidad Vendida</label>
					<input type="text" class="form-control" id="cantidad_vendida" name="cantidad_vendida" value="<?php echo $data["medicamentos"]["cantidad_vendida"]?>" />
				</div>
				
				<div class="form-group mb-3">
					<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</form>
		</body>
	</html>		