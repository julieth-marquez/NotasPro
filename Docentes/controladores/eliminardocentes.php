<?php
require_once('../../conexion.php');
require_once('../modelos/docentes.php');

//Verificacion del formulario enviado
$do= new Docentes();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{

	$Id = $_POST['Id'];
	$resultado=$do->deletedocen($Id);
	if($result)
	{
		print "<script>alert('Docente Eliminado');
		window.location='../pages/index.php';</script>";
	}else {
		print "<script>alert('Docente No Eliminado');
		window.location='../pages/eliminar.php';</script>";
	}
}



?>