<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: static;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
  </head>
  
	<body>
  <div class="sidebar">
  <a class="active bg-primary"><img class="img-thumbnail" src="img/ajolote.jpg"></img></a>
  <a class="active bg-primary" href="index.php">Administrador</a>
  <a class="active bg-primary" href="index.php?c=empleados">Empleados</a>
  <a class="active bg-primary" href="index.php?c=pacientes">Pacientes</a>
  <a class="active bg-primary" href="index.php?c=historiales">Historiales</a>
  <a class="active bg-primary" href="index.php?c=medicamentos">Medicamentos</a>
  <a class="active bg-primary" href="index.php?c=roles">Roles</a>
  <a class="active bg-primary" href="index.php?c=sucursales">Sucursales</a>
  <a class="active bg-primary" href="index.php?c=doctores">Doctores</a>
  <a class="active bg-primary" href="index.php?c=especialidades">Especialidades</a>
  <a class="active bg-primary" href="index.php?c=diagnosticos">Diagnosticos</a>
  <a class="active bg-primary" href="index.php?c=examenes">Examenes</a>
  <a class="active bg-primary" href="index.php?c=clientes">Clientes</a>
  <a class="active bg-primary" href="index.php?c=habitaciones">Habitaciones</a>
  <a class="active bg-primary" href="index.php?c=pacxhabitaciones">Paciente-Habitacion</a>
  <a class="active bg-primary" href="index.php?c=facturas">Facturas</a>
  <a class="active bg-primary" href="index.php?c=dfacturas">Detalles Facturas</a>
</div>
	</body>
</html>