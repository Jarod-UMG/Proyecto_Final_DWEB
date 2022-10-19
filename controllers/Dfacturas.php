<?php
	
	class DfacturasController {
		
		public function __construct(){
			require_once "models/DfacturasModel.php";
            require_once "models/FacturasModel.php";
            require_once "models/MedicamentosModel.php";
		}
		
		public function index(){
			$dfacturas = new Dfacturas_model();

			$data["titulo"] = "Dfacturas";
			$data["dfacturas"] = $dfacturas->get_dfacturas();
			
			require_once "views/dfacturas/dfacturas.php";	
		}
		
		public function nuevo(){
            $facturas = new Facturas_model();
            $medicamentos = new Medicamentos_model();

			$data["titulo"] = "Dfacturas";
            $datar["facturas"] = $facturas->get_facturas();
            $datas["medicamentos"] = $medicamentos->get_medicamentos();


			require_once "views/dfacturas/dfacturas_nuevo.php";
		}
		
		public function guarda(){
            $no_factura = $_POST['no_factura'];
            $id_medicamento = $_POST['id_medicamento'];
            $cantidad = $_POST['cantidad'];
            $precio_u = $_POST['precio_u'];
			
			$dfacturas = new Dfacturas_model();
			$dfacturas->insertar($no_factura, $id_medicamento, $cantidad, $precio_u);
			$data["titulo"] = "Dfacturas";
			$this->index();
		}
		
		public function modificar($id){
			$dfacturas = new Dfacturas_model();
			$facturas = new Facturas_model();
            $medicamentos = new Medicamentos_model();
			
			$data["id_dfactura"] = $id;
			$data["dfacturas"] = $dfacturas->get_dfactura($id);
			$datar["facturas"] = $facturas->get_facturas();
			$datas["medicamentos"] = $medicamentos->get_medicamentos();
			$data["titulo"] = "Dfacturas";

			require_once "views/dfacturas/dfacturas_modificar.php";
		}
		
		public function actualizar(){
			$id = $_POST['id_dfactura'];
            $no_factura = $_POST['no_factura'];
            $id_medicamento = $_POST['id_medicamento'];
			$cantidad = $_POST['cantidad'];
            $precio_u = $_POST['precio_u'];

			$dfacturas = new Dfacturas_model();
			$dfacturas->modificar($id, $no_factura, $id_medicamento, $cantidad, $precio_u);
			$data["titulo"] = "Dfacturas";
			$this->index();
		}
		
		public function eliminar($id){
			
			$dfacturas = new Dfacturas_model();
			$dfacturas->eliminar($id);
			$data["titulo"] = "Dfacturas";
			$this->index();
		}	
	}
?>