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
			
			<a href="index.php?c=medicamentos&a=nuevo" class="btn btn-primary">Agregar</a>
			<br/>
			<br/>
			<input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Buscar medicamento">

			<br/>
			<div class="table-responsive">
				<table border="1" id="myTable" width="80%" class="table table-dark table-hover table-striped">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Precio Unitario</th>
							<th>Cantidad Stock</th>
							<th>Cantidad Vendida</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php                  
                            foreach($data["medicamentos"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["nombre_medicamento"]."</td>";
							echo "<td>".$dato["precio_u"]."</td>";
							echo "<td>".$dato["cantidad_stock"]."</td>";
							echo "<td>".$dato["cantidad_vendida"]."</td>";
							echo "<td><a href='index.php?c=medicamentos&a=modificar&id=".$dato["id_medicamento"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=medicamentos&a=eliminar&id=".$dato["id_medicamento"]."' class='btn btn-danger'>Eliminar</a></td>";
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