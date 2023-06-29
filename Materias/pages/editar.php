<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilos5.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>Actualización de datos</title>

</head>
<body>

	<?php
	require_once('../../conexion.php');
	require_once('../modelos/materias.php');

	$Id = $_GET['Id'];
	$materia = new Materias();
	$row=$materia->getidmateria($Id);

	if($row){
		
?>
	
<form action="../controladores/editarmateria.php" method="POST">
	<input type="hidden" name="Id" value="<?php echo $Id ?>">

	<h1>ACTUALIZAR DATOS</h1>
</br>
	<hr>
</br>

	<i class="fa-solid fa-user"></i>
	<label>Nombre Materia</label>
	<input type="text" class="form-control" name="txtnombremateria" placeholder="Nombre de la materia" value="<?php echo $row['Nombremate']?>">
	
<br>

	<hr>
	</br>
	<button type="submit" >Actualizar</button>

</form>

<?php }?>


</body> 