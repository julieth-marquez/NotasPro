<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title>ACTUALIZAR DATOS DE USUARIO</title>
</head>
<body>
	<div class="container">
	<section class="form-register">
		<h4>ACTUALIZAR DATOS DE USUARIO</h4>
		<form action="../controladores/editarusuarios.php" method="post">
			<input type="hidden" name="Id" value="<?php echo $Id ?>">
		<div class="form-group">
		<h1>Nombre:</h1>
		<input class="controls" type="text" name="txtnombre" id="nombre" placeholder="Ingresar su Nombre" value="<?php echo $row['Nombreusu'] ?>">
		</div>
		<div class="form-group">
		<h1>Apellido:</h1>
		<input class="controls" type="text" name="txtapellido" id="apellido" placeholder="Ingresar su Apellido" value="<?php echo $row['Aoellidousu'] ?>">
		</div>
		<div class="form-group">
		<h1>Usuario:</h1>
		<input class="controls" type="text" name="txtusuario" id="usuario" placeholder="Ingresar su Usuario" value="<?php echo $row['Usuario'] ?>">
		</div>
		<div class="form-group">
		<h1>Contraseña:</h1>
		<input class="controls" type="password" name="txtcontraseña" id="contraseña" placeholder="Ingresar su Contraseña" value="<?php echo $row['Passwordusu'] ?>">
		</div>
		<div class="form-group">
		<h1>Perfil:</h1>
		<label for="perfil"></label>
		<select class="form-select" name="txtperfil" arial-label="Default select axample" value="<?php echo $row['Perfil'] ?>">
			<option value="Elegir una opcion">Elegir una opcion</option>
			<option value="Administrador">Administrador</option>
			<option value="Docente">Docente</option>
		</select>
		</div>
		<div class="form-group">
		<h1>Estado:</h1>
		<select class="form-select" name="txtestado" arial-label="Default select axample" value="<?php echo $row['Estado'] ?>">
			<option value="Elegir una opcion">Elegir una opcion</option>
			<option value="Activo">Activo</option>
			<option value="No Activo">No Activo</option>
		</select>
		</div>
		<br>
		<input class="btn btn-danger" type="submit" name="accion" value="Actualizar">
</form>
<?php } ?>
<?php
require_once('../../conexion.php');
require_once('../modelos/administrador.php');

$Id = $_GET['Id'];
$admin = new Administrador();
$row->$admin->getidad($Id);

if($row){

?>	
	</section>
</div>
</body>
</html>