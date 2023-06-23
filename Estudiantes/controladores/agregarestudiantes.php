<?php
require_once('../../conexion.php');
require_once('../modelos/estudiantes.php');

if ($_POST){
	//crear un objeto de la clase adminitrador 

	$estud = new Estudiantes();
	$Nombreest = $_POST['txtnombre'];
	$Apellidoest = $_POST['txtapellido'];
	$Documentoest = $_POST['txtdocumento'];
	$Correoest = ($_POST['txtcorreo']);
	$Materia = $_POST['txtmateria'];
	$Docente = $_POST['txtdocente'];
	$Promedio = $_POST['txtpromedio'];

		$estud->agregarestadd($Nombreest,$Apellidoest,$Documentoest,$Correoest,$Materia,$Docente,$Promedio);
	}

?>