<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title>REGISTRO DE MATERIAS</title>
</head>
<body>
	<div class="container">
	<section class="form-register">
		<h4>REGISTRO DE MATERIAS</h4>
		<form action="../controladores/agregarmaterias.php" method="post">
		<div class="form-group">
		<h1>Nombre de la materia:</h1>
		<input class="controls" type="text" name="txtnombremate" id="nombre" placeholder="Ingresar su Nombre">
		</div>
		<div class="form-group">
		<br>
		<input class="btn btn-danger" type="submit" name="accion" value="Registrar">
</form>
	</section>
</div>
</body>
</html>