<?php
require_once "views/Inicio.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $data["titulo"]; ?></title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container content">
		<h2><?php echo $data["titulo"]; ?></h2>

		<a href="vistas.php?c=diagnosticos&a=nuevo" class="btn btn-primary">Agregar</a>
		<br />
		<br />
		<input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Buscar diagnostico">

		<br />
		<div class="table-responsive">
			<table border="1" id="myTable" width="80%" class="table table-dark table-hover table-striped">
				<thead>
					<tr>
						<th>Diagnostico</th>
						<th></th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($data["diagnosticos"] as $dato) {
						echo "<tr>";
						echo "<td>" . $dato["diagnostico"] . "</td>";
						echo "<td><a href='vistas.php?c=diagnosticos&a=modificar&id=" . $dato["id_diagnostico"] . "' class='btn btn-warning'>Modificar</a></td>";
						echo "<td><a href='vistas.php?c=diagnosticos&a=eliminar&id=" . $dato["id_diagnostico"] . "' class='btn btn-danger' onclick=\"return confirm('Esta seguro de elimiar el registro?');\">Eliminar</a></td>";
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
				if (txtValue.toUpperCase().vistasOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			}
		}
	}
</script>

</html>