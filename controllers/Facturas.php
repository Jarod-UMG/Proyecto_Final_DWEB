<?php
	
	class FacturasController {
		
		public function __construct(){
			require_once "models/FacturasModel.php";
            require_once "models/ClientesModel.php";
            require_once "models/EmpleadosModel.php";
            require_once "models/SucursalesModel.php";
		}
		
		public function index(){
			$facturas = new Facturas_model();

			$data["titulo"] = "Facturas";
			$data["facturas"] = $facturas->get_facturas();
			
			require_once "views/facturas/facturas.php";	
		}
		
		public function nuevo(){
            $clientes = new Clientes_model();
            $empleados = new Empleados_model();
            $sucursales = new Sucursales_model();

			$data["titulo"] = "Facturas";
            $datap["clientes"] = $clientes->get_clientes();
            $datad["empleados"] = $empleados->get_empleados();
            $datas["sucursales"] = $sucursales->get_sucursales();

			require_once "views/facturas/facturas_nuevo.php";
		}
		
		public function guarda(){
            $id_cliente = $_POST['id_cliente'];
            $id_empleado = $_POST['id_empleado'];
            $fecha = $_POST['fecha'];
            $direccion = $_POST['direccion'];
            $id_sucursal = $_POST['id_sucursal'];
			
			$facturas = new Facturas_model();
			$facturas->insertar($id_cliente, $id_empleado, $fecha, $direccion, $id_sucursal);
			$data["titulo"] = "Facturas";
			$this->index();
		}
		
		public function modificar($id){
			$facturas = new Facturas_model();
            $clientes = new Clientes_model();
            $empleados = new Empleados_model();
            $sucursales = new Sucursales_model();
			
			$data["no_factura"] = $id;
			$data["facturas"] = $facturas->get_factura($id);
            $datap["clientes"] = $clientes->get_clientes();
            $datad["empleados"] = $empleados->get_empleados();
            $datas["sucursales"] = $sucursales->get_sucursales();
			$data["titulo"] = "Facturas";

			require_once "views/facturas/facturas_modificar.php";
		}
		
		public function actualizar(){

			$id = $_POST['no_factura'];
            $id_cliente = $_POST['id_cliente'];
            $id_empleado = $_POST['id_empleado'];
            $fecha = $_POST['fecha'];
            $direccion = $_POST['direccion'];
            $id_sucursal = $_POST['id_sucursal'];

			$facturas = new Facturas_model();
			$facturas->modificar($id, $id_cliente, $id_empleado, $fecha, $direccion, $id_sucursal);
			$data["titulo"] = "Facturas";
			$this->index();
		}
		
		public function eliminar($id){
			
			$facturas = new Facturas_model();
			$facturas->eliminar($id);
			$data["titulo"] = "Facturas";
			$this->index();
		}	
	}
?>