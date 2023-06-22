<?php
require_once('../../conexion.php');
require_once('../modelos/administrador.php');

if ($_POST){
	//crear un objeto de la clase adminitrador 

	$admin = new Administrador();
	$Nombreusu = $_POST['txtnombre'];
	$Apellidousu = $_POST['txtapellido'];
	$Usuariousu = $_POST['txtusuario'];
	$passwordusu = MD5($_POST['txtcontraseña']);
	$Perfil = $_POST['txtperfil'];
	$Estadousu = $_POST['txtestado'];

		$admin->agregaradadd($Nombreusu,$Apellidousu,$Usuariousu,$passwordusu,$Perfil,$Estadousu);
	}

?>