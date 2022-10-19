<?php
	
	class Dfacturas_model {
		
		private $db;
		private $dfacturas;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->dfacturas = array();
		}
		
		public function get_dfacturas()
		{
			$sql = "SELECT  e.id_dfactura, r.no_factura, s.nombre_medicamento, s.id_medicamento, e.cantidad, e.precio_u FROM detalles_factura AS e INNER JOIN facturas AS r ON e.no_factura = r.no_factura INNER JOIN medicamentos AS s ON e.id_medicamento = s. id_medicamento ORDER BY e.id_dfactura;";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->dfacturas[] = $row;
			}
			return $this->dfacturas;
		}
		
		public function insertar($no_factura, $id_medicamento, $cantidad, $precio_u){
			
			$resultado = $this->db->query("INSERT INTO detalles_factura (no_factura, id_medicamento, cantidad, precio_u) VALUES ('$no_factura', '$id_medicamento', '$cantidad', '$precio_u')");
			
		}
		
		public function modificar($id, $no_factura, $id_medicamento, $cantidad, $precio_u){
			
			$resultado = $this->db->query("UPDATE detalles_factura SET no_factura='$no_factura', id_medicamento='$id_medicamento', cantidad='$cantidad', precio_u='$precio_u' WHERE id_dfactura = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM detalles_factura WHERE id_dfactura = '$id'");
			
		}
		
		public function get_dfactura($id)
		{
			$sql = "SELECT  e.id_dfactura, r.no_factura, s.nombre_medicamento, s.id_medicamento, e.cantidad, e.precio_u FROM detalles_factura AS e INNER JOIN facturas AS r ON e.no_factura = r.no_factura INNER JOIN medicamentos AS s ON e.id_medicamento = s. id_medicamento WHERE e.id_dfactura = '$id'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>