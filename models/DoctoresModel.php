<?php
	
	class Doctores_model {
		
		private $db;
		private $doctores;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->doctores = array();
		}
		
		public function get_doctores()
		{
			$sql = "SELECT *FROM doctores";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->doctores[] = $row;
			}
			return $this->doctores;
		}
		/*
		public function insertar($nombre_rol){
			
			$resultado = $this->db->query("INSERT INTO doctores (nombre_rol) VALUES ('$nombre_rol')");
			
		}
		
		public function modificar($id, $nombre_rol){
			
			$resultado = $this->db->query("UPDATE doctores SET nombre_rol='$nombre_rol' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM doctores WHERE id = '$id'");
			
		}
		
		public function get_rol($id)
		{
			$sql = "SELECT r.id_rol, r.nombre_rol FROM doctores AS r INNER JOIN empleados AS e WHERE e.id_rol = '$id'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}*/
	} 
?>