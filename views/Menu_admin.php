<?php
require_once "views/Inicio.php";
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
		   <style>
.cardbox{
	position: relative;
	width: 100%;
	padding: 20px;
	display: grid;
	grid-template-columns: repeat(4, 1fr);
}

.cardbox .card{
	position: relative;
	background: var(--white);
	padding: 30px;
	border-radius: 20px;
	display: flex;
	justify-content: space-between;
	cursor: pointer;
	box-shadow:  0 7px 25px rgba(0, 0, 0, 0.08);
}
</style>
	</head>
	
	<body>
		<div class="content">
			<div class="cardbox">
				<div class="card">
					<p align="center">Roles</p>
					<a href="index.php?c=roles" class="btn btn-primary">Ver</a>
					<br/>
					<a href="index.php?c=roles&a=nuevo" class="btn btn-success">Agregar</a>
				</div>
				<div class="card">
					<p align="center">Empleados</p>
					<a href="index.php?c=empleados" class="btn btn-primary">Ver</a>
					<br/>
					<a href="index.php?c=empleados&a=nuevo" class="btn btn-success">Agregar</a>
				</div>
				<div class="card">
					<p align="center">Clientes</p>
					<a href="index.php?c=clientes" class="btn btn-primary">Ver</a>
					<br/>
					<a href="index.php?c=clientes&a=nuevo" class="btn btn-success">Agregar</a>
				</div>
				<div class="card">
					<p align="center">Doctores</p>
					<a href="index.php?c=doctores" class="btn btn-primary">Ver</a>
					<br/>
					<a href="index.php?c=doctores&a=nuevo" class="btn btn-success">Agregar</a>
				</div>
				<div class="card">
					<p align="center">Pacientes</p>
					<a href="index.php?c=pacientes" class="btn btn-primary">Ver</a>
					<br/>
					<a href="index.php?c=pacientes&a=nuevo" class="btn btn-success">Agregar</a>
				</div>
				<div class="card">
					<p align="center">Diagnosticos</p>
					<a href="index.php?c=diagnosticos" class="btn btn-primary">Ver</a>
					<br/>
					<a href="index.php?c=diagnosticos&a=nuevo" class="btn btn-success">Agregar</a>
				</div>
				<div class="card">
					<p align="center">Especialidades</p>
					<a href="index.php?c=especialidades" class="btn btn-primary">Ver</a>
					<br/>
					<a href="index.php?c=especialidades&a=nuevo" class="btn btn-success">Agregar</a>
				</div>
				<div class="card">
					<p align="center">Examenes</p>
					<a href="index.php?c=examenes" class="btn btn-primary">Ver</a>
					<br/>
					<a href="index.php?c=examenes&a=nuevo" class="btn btn-success">Agregar</a>
				</div>
				<div class="card">
					<p align="center">Medicamentos</p>
					<a href="index.php?c=medicamentos" class="btn btn-primary">Ver</a>
					<br/>
					<a href="index.php?c=medicamentos&a=nuevo" class="btn btn-success">Agregar</a>
				</div>
				<div class="card">
					<p align="center">Habitaciones</p>
					<a href="index.php?c=habitaciones" class="btn btn-primary">Ver</a>
					<br/>
					<a href="index.php?c=habitaciones&a=nuevo" class="btn btn-success">Agregar</a>
				</div>
				<div class="card">
					<p align="center">Pacientes-Habitaciones</p>
					<a href="index.php?c=pacxhabitaciones" class="btn btn-primary">Ver</a>
					<br/>
					<a href="index.php?c=pacxhabitaciones&a=nuevo" class="btn btn-success">Agregar</a>
				</div>
				<div class="card">
					<p align="center">Historiales</p>
					<a href="index.php?c=historiales" class="btn btn-primary">Ver</a>
					<br/>
					<a href="index.php?c=historiales&a=nuevo" class="btn btn-success">Agregar</a>
				</div>
				<div class="card">
					<p align="center">Sucursales</p>
					<a href="index.php?c=sucursales" class="btn btn-primary">Ver</a>
					<br/>
					<a href="index.php?c=sucursales&a=nuevo" class="btn btn-success">Agregar</a>
				</div>
				<div class="card">
					<p align="center">Facturas</p>
					<a href="index.php?c=facturas" class="btn btn-primary">Ver</a>
					<br/>
					<a href="index.php?c=facturas&a=nuevo" class="btn btn-success">Agregar</a>
				</div>
				<div class="card">
					<p align="center">Detalles Factura</p>
					<a href="index.php?c=dfacturas" class="btn btn-primary">Ver</a>
					<br/>
					<a href="index.php?c=dfacturas&a=nuevo" class="btn btn-success">Agregar</a>
				</div>
			</div>
		</div>
	</body>

<script>

</script>
</html>