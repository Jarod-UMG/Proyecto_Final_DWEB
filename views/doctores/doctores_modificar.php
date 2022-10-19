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
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=doctores&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id_doctor" name="id_doctor" value="<?php echo $data["id_doctor"]; ?>" />
				
				<div class="form-group mb-3">
					<label for="nombre_doctor">Nombre</label>
					<input type="text" class="form-control" id="nombre_doctor" name="nombre_doctor" value="<?php echo $data["doctores"]["nombre_doctor"]?>" />
				</div>
				
                <div class="form-group mb-3">
					<label for="id_especialidad">Especialidad</label>
                    <select class="form-select" name="id_especialidad" id="id_especialidad">
						<option value="<?php echo $data["doctores"]["id_especialidad"]?>" selected>--<?php echo $data["doctores"]["nombre_especialidad"]?>--</option>";
                        <?php 
                            foreach($datap["especialidades"] as $dato){
                                echo "<option value=".$dato["id_especialidad"].">".$dato["nombre_especialidad"]."</option>";
                            }
                        ?>
                    </select>
				</div>

                <div class="form-group mb-3">
					<label for="id_sucursal">Sucursal</label>
                    <select class="form-select" name="id_sucursal" id="id_sucursal">
						echo "<option value="<?php echo $data["doctores"]["id_sucursal"]?>" selected>--<?php echo $data["doctores"]["nombre_sucursal"]?>--</option>";
                        <?php 
                            foreach($datas["sucursales"] as $dato){
                                echo "<option value=".$dato["id_sucursal"].">".$dato["nombre_sucursal"]."</option>";
                            }
                        ?>
                    </select>
				</div>
				
                <div class="form-group mb-3">
				    <button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
                </div>

			</form>
		</body>
	</html>		