<?php

require_once('../../Conexion.php');
require_once('../modelos/materias.php');

//verificacion del formulario enviado 
$ad= new Materias();

 if ($_SERVER['REQUEST_METHOD'] == 'POST')
 	
  {
 	$Id = $_POST['Id'];
 	$result=$ad->deletemateria($Id);

 	if ($result) 
 	{
 		print"<script>alert('Materia eliminada');window.location='../pages/index.php';</script>";
 	}else{
 		print"<script>alert('Materia no eliminada');window.location='../pages/eliminar.php';</script>";
 	}

 }



?>