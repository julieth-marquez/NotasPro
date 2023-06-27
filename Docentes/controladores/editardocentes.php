<?php
require_once('../../conexion.php');
require_once('../modelos/docentes.php');

$docen = new Docentes();
if ($_POST){
	$Id = $_POST['Id'];
	$Nombredocen = $_POST['txtnombre'];
	$Apellidodocen = $_POST['txtapellido'];
	$Documentodocen = $_POST['txtdocumento'];
	$Correodocen = $_POST['txtcorreo'];
	$Materiadocen = $_POST['txtmateria'];
	$Usuariodocen = $_POST['txtusuario'];
	$Passworddocen = MD5($_POST['txtcontraseña']);
	$Perfildocen = $_POST['txtperfil'];
	$Estadodocen = $_POST['txtestado'];

		$docen->updatedocen($Id,$Nombredocen,$Apellidodocen,$Documentodocen,$Correodocen,$Materiadocen,$Usuariodocen,$Passworddocen,$Perfildocen,$Estadodocen);
	}

?>