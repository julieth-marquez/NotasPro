<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title>ELIMINAR MATERIA</title>
</head>
<body>

</body>
</html>
<h2>ELIMINAR MATERIA</h2>

<?php
require_once('../../conexion.php');
require_once('../modelos/materias.php');
 
 $mate = new Materias();
 $Id = $_GET['Id'];
?>
<form action="../controladores/eliminarmaterias.php" method="POST">
	<div class="form-group">
		<label>ID MATERIA:</label>
		<input type="number" class="form-register" name="Id" placeholder="Ingresar la materia a eliminar">
	</div>
	<br>
	<br>
	<input type="submit" class="btn btn-primary" value="Eliminar">
</form>