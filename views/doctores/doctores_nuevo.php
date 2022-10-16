<?php
require_once "views/Inicio.php";
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	
	<body>
		<div class="container content">
			<h2><?php echo $data["titulo"]; ?></h2>	
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=doctores&a=guarda" autocomplete="off">

				<div class="form-group mb-3">
					<label for="nombre_doctor">Nombre</label>
					<input type="text" class="form-control" id="nombre_doctor" name="nombre_doctor" />
				</div>
				
				<div class="form-group mb-3">
					<label for="id_especialidad">Especialidad</label>
                    <select class="form-select" name="id_especialidad" id="id_especialidad">
                        <option value=0> ---- Elija una especialidad---- </option>
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
                        <option value=0> ---- Elija una sucursal---- </option>
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
		</div>
	</body>
</html>