<?php
	
	class Conectar {
		
		public static function conexion(){
			
			$conexion = new mysqli("localhost", "root", "abc123", "db_clinica");
			return $conexion;
			
		}
	}
?>