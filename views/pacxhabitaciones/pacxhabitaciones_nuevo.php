<?php
require_once "views/Inicio.php";
?>
<!DOCTYPE html>
<html lang="es">
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
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=pacxhabitaciones&a=guarda" autocomplete="off">

				<div class="form-group mb-3">
					<label for="id_paciente">Paciente</label>
                    <select class="form-select" name="id_paciente" id="id_paciente">
                        <option value=0> ---- Elija un paciente---- </option>
                        <?php 
                            foreach($datar["pacientes"] as $dato){
                                echo "<option value=".$dato["id_paciente"].">".$dato["nombre_paciente"]."</option>";
                            }
                        ?>
                    </select>
				</div>
                
                <div class="form-group mb-3">
					<label for="id_habitacion">Habitacion</label>
                    <select class="form-select" name="id_habitacion" id="id_habitacion">
                        <option value=0> ---- Elija una habitacion---- </option>
                        <?php 
                            foreach($datas["habitaciones"] as $dato){
                                echo "<option value=".$dato["id_habitacion"].">".$dato["nombre_habitacion"]."</option>";
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