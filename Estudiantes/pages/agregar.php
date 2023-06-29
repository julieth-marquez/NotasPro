<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title>REGISTRO DE ESTUDIANTES</title>
</head>
<body>
	<div class="container">
	<section class="form-register">
		<h4>REGISTRO DE ESTUDIANTES</h4>
		<form action="../controladores/agregarestudiantes.php" method="post">
		<div class="form-group">
		<h1>Nombre:</h1>
		<input class="controls" type="text" name="txtnombre" id="nombre" placeholder="Ingresar su Nombre">
		</div>
		<div class="form-group">
		<h1>Apellido:</h1>
		<input class="controls" type="text" name="txtapellido" id="apellido" placeholder="Ingresar su Apellido">
		</div>
		<div class="form-group">
		<h1>Documento:</h1>
		<input class="controls" type="text" name="txtdocumento" id="documento" placeholder="Ingresar su Documento">
		</div>
		<div class="form-group">
		<h1>Correo:</h1>
		<input class="controls" type="text" name="txtcorreo" id="correo" placeholder="Ingresar su Correo">
		</div>
		<div class="form-group">
		div class="form-group">
		<h1>Materia:</h1>
		<label for="perfil"></label>
		<select class="form-select" name="txtmateria" arial-label="Default select axample">
			<option value="Elegir su Perfil">Elige su Materia</option>
		</select>
		</div>
		<div class="form-group">
		<h1>Docente:</h1>
		<select class="form-select" name="txtdocente" arial-label="Default select axample">
			<option value="Elegir su Estado">Elige su Docente</option>
		</select>
		</div>
		<div class="form-group">
		<h1>Promedio:</h1>
		<input class="controls" type="text" name="txtpromedio" id="promedio" placeholder="Ingresar su Promedio">
		</div>
		<div class="form-group">
		<h1>Fecha de registro:</h1>
		<input class="controls" type="text" name="txtfechare" id="feharegistro" placeholder="dd/mm/aa">
		</div>
		<br>
		<input class="btn btn-danger" type="submit" name="accion" value="Registrar">
</form>
	</section>
</div>
</body>
</html>