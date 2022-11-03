<?php

class MedicamentosController
{

	public function __construct()
	{
		require_once "models/MedicamentosModel.php";
	}

	public function index()
	{
		$medicamentos = new Medicamentos_model();

		$data["titulo"] = "Control de inventario Medicamentos";
		$data["medicamentos"] = $medicamentos->get_medicamentos();

		require_once "views/medicamentos/medicamentos.php";
	}

	public function nuevo()
	{
		$data["titulo"] = "Medicamentos";

		require_once "views/medicamentos/medicamentos_nuevo.php";
	}

	public function guarda()
	{
		$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
		$nombre_medicamento = $_POST['nombre_medicamento'];
		$precio_u = $_POST['precio_u'];
		$cantidad_stock = $_POST['cantidad_stock'];
		$cantidad_vendida = $_POST['cantidad_vendida'];

		$medicamentos = new Medicamentos_model();
		$medicamentos->insertar($imagen, $nombre_medicamento, $precio_u, $cantidad_stock, $cantidad_vendida);
		$data["titulo"] = "Medicamentos";
		$this->index();
	}

	public function modificar($id)
	{
		$medicamentos = new Medicamentos_model();

		$data["id_medicamento"] = $id;
		$data["medicamentos"] = $medicamentos->get_medicamento($id);
		$data["titulo"] = "Medicamentos";

		require_once "views/medicamentos/medicamentos_modificar.php";
	}

	public function actualizar()
	{

		$id = $_POST['id_medicamento'];
		$nombre_medicamento = $_POST['nombre_medicamento'];
		$precio_u = $_POST['precio_u'];
		$cantidad_stock = $_POST['cantidad_stock'];
		$cantidad_vendida = $_POST['cantidad_vendida'];

		$medicamentos = new Medicamentos_model();
		$medicamentos->modificar($id, $nombre_medicamento, $precio_u, $cantidad_stock, $cantidad_vendida);
		$data["titulo"] = "Medicamentos";
		$this->index();
	}

	public function eliminar($id)
	{

		$medicamentos = new Medicamentos_model();
		$medicamentos->eliminar($id);
		$data["titulo"] = "Medicamentos";
		$this->index();
	}
}
