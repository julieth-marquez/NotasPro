<?php
 include_once('../../Conexion.php');
 require_once('../modelos/administrador.php');

 $admin = new Administrador();
if($_POST)
{
 $Id = $_POST['Id'];
 $Nombread = $_POST['txtnombre'];
 $Apellidoad = $_POST['txtapellido'];
 $Usuarioad = $_POST['txtusuario'];
 $Passwordad = $_POST['txtpassword'];
 $Perfilad = $_POST['txtperfil'];
 $Estadoad = $_POST['txtestado'];

$admin->updatead($Id, $Nombread, $Apellidoad, $Usuarioad, $Passwordad, $Perfilad, $Estadoad);

}
?>