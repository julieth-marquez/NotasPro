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
		<?php
	require_once('../../conexion.php');
	require_once('../modelos/materias.php');

	$Id = $_GET['Id'];
	$mate = new Materias();
	$row=$mate->getidmateria($Id);

	if($row){

	?>	
		<h4>REGISTRO DE MATERIAS</h4>
		<form action="../controladores/editarmaterias.php" method="post">
			<input type="hidden" name="Id" value="<?php echo $Id ?>">
		<div class="form-group">
		<h1>Nombre de la materia:</h1>
		<input class="controls" type="text" name="txtnombremate" id="nombre" value="<?php echo $row['Nombremate'] ?>">
		<div class="form-group">
		<h1>Id de la materia:</h1>
		<input class="controls" type="text" name="txtidmate" id="nombre" value="<?php echo $row['id_materia'] ?>">
		</div>
		<br>
		<input class="btn btn-danger" type="submit" name="accion" value="Registrar">
</form>
<?php } ?>
	</section>
</div>
</body>
</html>