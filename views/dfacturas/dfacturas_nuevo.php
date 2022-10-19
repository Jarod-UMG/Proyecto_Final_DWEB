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
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=dfacturas&a=guarda" autocomplete="off">
				
				<div class="form-group mb-3">
					<label for="no_factura">No. Factura</label>
                    <select class="form-select" name="no_factura" id="no_factura">
                        <option value=0> ---- Elija una factura---- </option>
                        <?php 
                            foreach($datar["facturas"] as $dato){
                                echo "<option value=".$dato["no_factura"].">".$dato["no_factura"]."</option>";
                            }
                        ?>
                    </select>
				</div>
                
                <div class="form-group mb-3">
					<label for="id_medicamento">Medicamento</label>
                    <select class="form-select" name="id_medicamento" id="id_medicamento">
                        <option value=0> ---- Elija un medicamento---- </option>
                        <?php 
                            foreach($datas["medicamentos"] as $dato){
                                echo "<option value=".$dato["id_medicamento"].">".$dato["nombre_medicamento"]."</option>";
                            }
                        ?>
                    </select>
				</div>
				
				<div class="form-group mb-3">
					<label for="cantidad">Cantidad</label>
					<input type="text" class="form-control" id="cantidad" name="cantidad" />
				</div>
				
				<div class="form-group mb-3">
					<label for="precio_u">Precio Unitario</label>
					<input type="text" class="form-control" id="precio_u" name="precio_u" />
				</div>
				
				<div class="form-group mb-3">
                    <button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
                </div>
				
			</form>
		</div>
	</body>
</html>