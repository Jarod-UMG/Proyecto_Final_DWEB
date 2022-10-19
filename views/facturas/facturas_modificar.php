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
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=facturas&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="no_factura" name="no_factura" value="<?php echo $data["no_factura"]; ?>" />
				
                <div class="form-group mb-3">
					<label for="id_cliente">Cliente</label>
                    <select class="form-select" name="id_cliente" id="id_cliente">
						<option value="<?php echo $data["facturas"]["id_cliente"]?>" selected>--<?php echo $data["facturas"]["nombre_cliente"]?>--</option>";
                        <?php 
                            foreach($datap["pacientes"] as $dato){
                                echo "<option value=".$dato["id_cliente"].">".$dato["nombre_cliente"]."</option>";
                            }
                        ?>
                    </select>
				</div>

                <div class="form-group mb-3">
					<label for="id_empleado">Empleado</label>
                    <select class="form-select" name="id_empleado" id="id_empleado">
						echo "<option value="<?php echo $data["facturas"]["id_empleado"]?>" selected>--<?php echo $data["facturas"]["nombre_empleado"]?>--</option>";
                        <?php 
                            foreach($datad["empleados"] as $dato){
                                echo "<option value=".$dato["id_empleado"].">".$dato["nombre_empleado"]."</option>";
                            }
                        ?>
                    </select>
				</div>

                <div class="form-group mb-3">
					<label for="fecha">Fecha</label>
					<input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $data["facturas"]["fecha"]?>" />
				</div>

                <div class="form-group mb-3">
					<label for="direccion">Direccion</label>
					<input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $data["facturas"]["direccion"]?>" />
				</div>

                <div class="form-group mb-3">
					<label for="id_sucursal">Sucursal</label>
                    <select class="form-select" name="id_sucursal" id="id_sucursal">
						echo "<option value="<?php echo $data["facturas"]["id_sucursal"]?>" selected>--<?php echo $data["facturas"]["nombre_sucursal"]?>--</option>";
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