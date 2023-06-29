<?php
require_once('../../conexion.php');
require_once('../modelos/materias.php');

if ($_POST){
	//crear un objeto de la clase adminitrador 

	$mater = new Materias();
	$Nombremateria = $_POST['txtnombremate'];

		$mater->agregarmateadd($Nombremateria);
	}

?>