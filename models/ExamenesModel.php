<?php
	
	class Examenes_model {
		
		private $db;
		private $examenes;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->examenes = array();
		}
		
		public function get_examenes()
		{
			$sql = "SELECT *FROM examenes";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->examenes[] = $row;
			}
			return $this->examenes;
		}
		/*
		public function insertar($nombre_rol){
			
			$resultado = $this->db->query("INSERT INTO examenes (nombre_rol) VALUES ('$nombre_rol')");
			
		}
		
		public function modificar($id, $nombre_rol){
			
			$resultado = $this->db->query("UPDATE examenes SET nombre_rol='$nombre_rol' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM examenes WHERE id = '$id'");
			
		}
		
		public function get_rol($id)
		{
			$sql = "SELECT r.id_rol, r.nombre_rol FROM examenes AS r INNER JOIN empleados AS e WHERE e.id_rol = '$id'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}*/
	} 
?>