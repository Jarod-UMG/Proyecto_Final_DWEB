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
			
			<a href="index.php?c=historiales&a=nuevo" class="btn btn-primary">Agregar</a>
			
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table table-dark table-hover table-striped">
					<thead>
						<tr>
							<th>Fecha</th>
							<th>Paciente</th>
							<th>Sucursal</th>
							<th>Diagnostico</th>
							<th>Examen</th>
                            <th>Doctor</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php                  
                            foreach($data["historiales"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["fecha_registro"]."</td>";
							echo "<td>".$dato["nombre_paciente"]."</td>";
							echo "<td>".$dato["nombre_sucursal"]."</td>";
							echo "<td>".$dato["diagnostico"]."</td>";
							echo "<td>".$dato["nombre_examen"]."</td>";
                            echo "<td>".$dato["nombre_doctor"]."</td>";
							echo "<td><a href='index.php?c=historiales&a=modificar&id=".$dato["id_historial"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=historiales&a=eliminar&id=".$dato["id_historial"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>