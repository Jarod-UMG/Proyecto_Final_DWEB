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
			
			<a href="index.php?c=pacxhabitaciones&a=nuevo" class="btn btn-primary">Agregar</a>
			<br/>
			<br/>
			<input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Buscar paciente">

			<br/>
			<div class="table-responsive">
				<table border="1" id="myTable" width="80%" class="table table-dark table-hover table-striped">
					<thead>
						<tr>
							<th>Paciente</th>
							<th>Habitacion</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php                  
                            foreach($data["pacxhabitaciones"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["nombre_paciente"]."</td>";
							echo "<td>".$dato["nombre_habitacion"]."</td>";
							echo "<td><a href='index.php?c=pacxhabitaciones&a=modificar&id=".$dato["id_pac_x_hab"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=pacxhabitaciones&a=eliminar&id=".$dato["id_pac_x_hab"]."' class='btn btn-danger' onclick=\"return confirm('Esta seguro de elimiar el registro?');\">Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
	<script>
		function myFunction() {
		// Declare variables
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");

		// Loop through all table rows, and hide those who don't match the search query
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
			txtValue = td.textContent || td.innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";
			}
			}
		}
		}
</script>
</html>