<?php

require_once('../../conexion.php');
require_once('../modelos/administrador.php');

if($_POST)
{
	//crear un objeto de la clase administrador 
	$admin = new Administrador();
	$Nombread = $_POST['txtnombre'];
	$Apellidoad= $_POST['txtapellido'];
	$Usuarioad = $_POST['txtusuario'];
	$Passwordad = MD5($_POST['txtpassword']);
	$Perfilad = $_POST['txtperfil'];
	$Estadoad = $_POST['txtestado'];


	$admin->agregarad($Nombread,$Apellidoad,$Usuarioad,$Passwordad, $Perfilad,$Estadoad);
}




?>