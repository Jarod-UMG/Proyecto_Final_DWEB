<?php
//var_dump($datar);
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
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=pacientes&a=guarda" autocomplete="off">
				<div class="form-group">
					<label for="nombre_paciente">Nombres</label>
					<input type="text" class="form-control" id="nombre_paciente" name="nombre_paciente" />
				</div>
				<br/>
				<div class="form-group">
					<label for="apellido_paciente">Apellidos</label>
					<input type="text" class="form-control" id="apellido_paciente" name="apellido_paciente" />
				</div>
				<br/>
				<div class="form-group">
					<label for="direccion_paciente">Direccion</label>
					<input type="text" class="form-control" id="direccion_paciente" name="direccion_paciente" />
				</div>
				<br/>
                <div class="form-group">
					<label for="telefono_paciente">Telefono</label>
					<input type="text" class="form-control" id="telefono_paciente" name="telefono_paciente" />
				</div>
				<br/>
				<div class="form-group">
                    <button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
                </div>
				
			</form>
		</div>
	</body>
</html>