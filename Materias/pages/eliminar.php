<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="estilos5.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<title>ELIMINAR MATERIAS</title>
</head>
<body>

<h2>ELIMINAR MATERIAS</h2>
	<?php

		require_once('../../Conexion.php');
		require_once('../modelos/materias.php');

		$admin = new Materias();
		$Id= $_GET['Id'];

	?>
	<form action="../controladores/eliminarmateria.php" method="POST">
		
	<div class="form-group">
	<label>ID MATERIA</label>
	<input type="number" class="form-control" name="Id" placeholder="Ingrese el Id a eliminar">
	</div>
	<br>
	<input type="submit" class="btn btn-primary" value="Eliminar">
	</form>
</body>
</html>