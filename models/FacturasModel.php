<?php
	
	class Facturas_model {
		
		private $db;
		private $facturas;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->facturas = array();
		}
		
		public function get_facturas()
		{
			$sql = "SELECT h.no_factura, h.id_cliente, d.nombre_cliente, h.id_empleado, e.nombre_empleado, h.fecha, h.direccion, h.id_sucursal, s.nombre_sucursal FROM facturas AS h INNER JOIN clientes AS d ON h.id_cliente = d.id_cliente INNER JOIN empleados AS e ON h.id_empleado = e. id_empleado INNER JOIN sucursales AS s ON h.id_sucursal = s. id_sucursal ORDER BY h.fecha;";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->facturas[] = $row;
			}
			return $this->facturas;
		}
		
		public function insertar($id_cliente, $id_empleado, $fecha, $direccion, $id_sucursal){
			
			$resultado = $this->db->query("INSERT INTO facturas (id_cliente, id_empleado, fecha, direccion, id_sucursal) VALUES ('$id_cliente', '$id_empleado', '$fecha', '$direccion', '$id_sucursal')");
			
		}
		
		public function modificar($id, $id_cliente, $id_empleado, $fecha, $direccion, $id_sucursal){
			
			$resultado = $this->db->query("UPDATE facturas SET id_cliente='$id_cliente', id_empleado='$id_empleado', fecha='$fecha', direccion='$direccion', id_sucursal='$id_sucursal' WHERE no_factura = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM facturas WHERE no_factura = '$id'");
			
		}
		
		public function get_factura($id)
		{
			$sql = "SELECT  h.id_cliente, d.nombre_cliente, h.id_empleado, e.nombre_empleado, h.fecha, h.direccion, h.id_sucursal, s.nombre_sucursal FROM facturas AS h INNER JOIN clientes AS d ON h.id_cliente = d.id_cliente INNER JOIN empleados AS e ON h.id_empleado = e. id_empleado INNER JOIN sucursales AS s ON h.id_sucursal = s. id_sucursal WHERE h.no_factura = '$id'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>