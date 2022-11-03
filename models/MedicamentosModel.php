<?php

class Medicamentos_model
{

	private $db;
	private $medicamentos;

	public function __construct()
	{
		$this->db = Conectar::conexion();
		$this->medicamentos = array();
	}

	public function get_medicamentos()
	{
		$sql = "SELECT *FROM medicamentos;";
		$resultado = $this->db->query($sql);
		while ($row = $resultado->fetch_assoc()) {
			$this->medicamentos[] = $row;
		}
		return $this->medicamentos;
	}

	public function insertar($imagen, $nombre_medicamento, $precio_u, $cantidad_stock, $cantidad_vendida)
	{

		$resultado = $this->db->query("INSERT INTO medicamentos (imagen,nombre_medicamento, precio_u, cantidad_stock, cantidad_vendida) VALUES ('$imagen', '$nombre_medicamento', '$precio_u', '$cantidad_stock', '$cantidad_vendida')");
	}

	public function modificar($id, $nombre_medicamento, $precio_u, $cantidad_stock, $cantidad_vendida)
	{

		$resultado = $this->db->query("UPDATE medicamentos SET nombre_medicamento='$nombre_medicamento', precio_u='$precio_u', cantidad_stock='$cantidad_stock', cantidad_vendida='$cantidad_vendida' WHERE id_medicamento = '$id'");
	}

	public function eliminar($id)
	{

		$resultado = $this->db->query("DELETE FROM medicamentos WHERE id_medicamento = '$id'");
	}

	public function get_medicamento($id)
	{
		$sql = "SELECT *FROM medicamentos WHERE id_medicamento = '$id'";
		$resultado = $this->db->query($sql);
		$row = $resultado->fetch_assoc();

		return $row;
	}
}
