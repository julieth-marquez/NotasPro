<?php
require_once('../../conexion.php');
require_once('../modelos/materias.php');

$mate= new Materias();
if ($_POST){
	$Id = $_POST['txtidmate'];
	$Nombremate = $_POST['txtnombremate'];
	
		$mate->updatemateria($Id,$Nombremate);
	}

?>