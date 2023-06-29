<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilos4.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Materias</title>
</head>
<body>
<form action="../controladores/agregarmaterias.php" method="POST">

	<h1>MATERIAS</h1>
</br>
	<hr>
</br>


	<i class="fa-solid fa-book"></i>
	<label>Nombre Materia</label>
	<input type="text" class="form-control" name="txtnombremateria" placeholder="Nombre de la materia">
	<br>
	

	<hr>
	</br>
	<button type="submit" >Agregar</button>

</form>
</body>
</html>