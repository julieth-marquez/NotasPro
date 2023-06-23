<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilo.css">
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
		<h1>Materia:</h1>
		<input class="controls" type="text" name="txtmateria" id="materia" placeholder="Ingresar su Materia">
		</div>
		<div class="form-group">
		<h1>Docente:</h1>
		<input class="controls" type="text" name="txtdocente" id="docente" placeholder="Ingresar el Docente">
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