<?php
	
	class Diagnosticos_model {
		
		private $db;
		private $diagnosticos;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->diagnosticos = array();
		}
		
		public function get_diagnosticos()
		{
			$sql = "SELECT *FROM diagnosticos";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->diagnosticos[] = $row;
			}
			return $this->diagnosticos;
		}
		/*
		public function insertar($nombre_rol){
			
			$resultado = $this->db->query("INSERT INTO diagnosticos (nombre_rol) VALUES ('$nombre_rol')");
			
		}
		
		public function modificar($id, $nombre_rol){
			
			$resultado = $this->db->query("UPDATE diagnosticos SET nombre_rol='$nombre_rol' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM diagnosticos WHERE id = '$id'");
			
		}
		
		public function get_rol($id)
		{
			$sql = "SELECT r.id_rol, r.nombre_rol FROM diagnosticos AS r INNER JOIN empleados AS e WHERE e.id_rol = '$id'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}*/
	} 
?>