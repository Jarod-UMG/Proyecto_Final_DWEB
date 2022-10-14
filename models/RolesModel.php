<?php
	
	class Roles_model {
		
		private $db;
		private $roles;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->roles = array();
		}
		
		public function get_roles()
		{
			$sql = "SELECT id_rol, nombre_rol FROM roles";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->roles[] = $row;
			}
			return $this->roles;
		}
		
		public function insertar($nombre_rol){
			
			$resultado = $this->db->query("INSERT INTO roles (nombre_rol) VALUES ('$nombre_rol')");
			
		}
		
		public function modificar($id, $nombre_rol){
			
			$resultado = $this->db->query("UPDATE roles SET nombre_rol='$nombre_rol' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM roles WHERE id = '$id'");
			
		}
		/*
		public function get_rol($id)
		{
			$sql = "SELECT r.id_rol, r.nombre_rol FROM roles AS r INNER JOIN empleados AS e WHERE e.id_rol = '$id'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}*/
	} 
?>