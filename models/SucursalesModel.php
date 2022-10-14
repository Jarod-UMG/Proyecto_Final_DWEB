<?php
	
	class Sucursales_model {
		
		private $db;
		private $sucursales;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->sucursales = array();
		}
		
		public function get_sucursales()
		{
			$sql = "SELECT id_sucursal, nombre_sucursal FROM sucursales";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->sucursales[] = $row;
			}
			return $this->sucursales;
		}
		/*
		public function insertar($nombre_rol){
			
			$resultado = $this->db->query("INSERT INTO sucursales (nombre_rol) VALUES ('$nombre_rol')");
			
		}
		
		public function modificar($id, $nombre_rol){
			
			$resultado = $this->db->query("UPDATE sucursales SET nombre_rol='$nombre_rol' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM sucursales WHERE id = '$id'");
			
		}
		
		public function get_sucursal($id)
		{
			$sql = "SELECT *FROM sucursales WHERE id_sucursal = '$id'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}*/
	} 
?>