<?php
require_once('../../conexion.php');
require_once('../modelos/materias.php');

//Verificacion del formulario enviado
$mate= new Materias();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{

	$Id = $_POST['Id'];
	$resultado=$mate->deletemateria($Id);
	if($result)
	{
		print "<script>alert('Materia Eliminada');
		window.location='../pages/index.php';</script>";
	}else {
		print "<script>alert('Materia No Eliminada');
		window.location='../pages/eliminar.php';</script>";
	}
}



?>