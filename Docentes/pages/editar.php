<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title>REGISTRO DE DOCENTES</title>
</head>
<body>
	<div class="container">
	<section class="form-register">
		<?php
	require_once('../../conexion.php');
	require_once('../modelos/docentes.php');

	$Id = $_GET['Id'];
	$docen = new Docentes();
	$row=$docen->getiddocen($Id);

	if($row){

	?>	
		<h4>REGISTRO DE DOCENTES</h4>
		<form action="../controladores/editardocentes.php" method="post">
			<input type="hidden" name="Id" value="<?php echo $Id ?>">
		<div class="form-group">
		<h1>Nombre:</h1>
		<input class="controls" type="text" name="txtnombre" id="nombre" placeholder="Ingresar su Nombre" value="<?php echo $row['Nombredoce'] ?>">
		</div>
		<div class="form-group">
		<h1>Apellido:</h1>
		<input class="controls" type="text" name="txtapellido" id="apellido" placeholder="Ingresar su Apellido" value="<?php echo $row['Apellidodoce'] ?>">
		</div>
		<div class="form-group">
		<h1>Documento:</h1>
		<input class="controls" type="text" name="txtdocumento" id="documento" placeholder="Ingresar su Documento" value="<?php echo $row['Documentodoce'] ?>">
		</div>
		<div class="form-group">
		<h1>Correo:</h1>
		<input class="controls" type="text" name="txtcorreo" id="correo" placeholder="Ingresar su Correo" value="<?php echo $row['Correodoce'] ?>">
		</div>
		<div class="form-group">
		<h1>Materia:</h1>
		<input class="controls" type="text" name="txtmateria" id="materia" placeholder="Ingresar su Materia" value="<?php echo $row['Materiadoce'] ?>">
		</div>
		<div class="form-group">
		<h1>Usuario:</h1>
		<input class="controls" type="text" name="txtusuario" id="usuario" placeholder="Ingresar su Usuario" value="<?php echo $row['Usuariodoce'] ?>">
		</div>
		<div class="form-group">
		<h1>Contraseña:</h1>
		<input class="controls" type="password" name="txtcontraseña" id="contraseña" placeholder="Ingresar su Contraseña" value="<?php echo $row['Passworddoce'] ?>">
		</div>
		<div class="form-group">
		<h1>Perfil:</h1>
		<label for="perfil"></label>
		<select class="form-select" name="txtperfil" arial-label="Default select axample" value="<?php echo $row['Perfil'] ?>">
			<option value="Elegir su Perfil">Elige su Perfil</option>
			<option value="Administrador">Administrador</option>
			<option value="Docente">Docente</option>
		</select>
		</div>
		<div class="form-group">
		<h1>Estado:</h1>
		<select class="form-select" name="txtestado" arial-label="Default select axample" value="<?php echo $row['Estado'] ?>">
			<option value="Elegir su Estado">Elige su Estado</option>
			<option value="Activo">Activo</option>
			<option value="No Activo">No Activo</option>
		</select>
		</div>
		<br>
		<input class="btn btn-danger" type="submit" name="accion" value="Registrar">
</form>
<?php } ?>
	</section>
</div>
</body>
</html>