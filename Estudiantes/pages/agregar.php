<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilos3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Inicio de sesion</title>
</head>
<body>
<form action="../controladores/agregarusuarios.php" method="POST">

	<h1>INICIAR SESIÓN</h1>
	<br>
	<hr>
</br>

	<i class="fa-solid fa-user"></i>
	<label>Nombre Estudiante</label>
	<input type="text" class="form-control" name="txtnombre" placeholder="Ingrese su Nombre">

	</br>

	<i class="fa-solid fa-user"></i>
	<label>Apellido Estudiante</label>
	<input type="text" class="form-control" name="txtapellido" placeholder="Ingrese su Apellido">
	</br>

	<i class="fa-solid fa-address-card"></i>
	<label>Documento</label>
	<input type="text" name="txtdocumento" placeholder="Ingrese su documento">
	</br>

	<i class="fa-solid fa-envelope"></i>
	<label>Correo</label>
	<input type="text" class="form-control" name="txtcorreo" placeholder="Ingrese su contraseña">
	</br>

	<i class="fa-solid fa-book"></i>
	<label for="perfil">Materias</label>
	<select class="from-select" name="txtmateria" aria-label="Default select example">
	</select>
	</br>

	<i class="fa-solid fa-user"></i>
	<label for="perfil">Docente</label>
	<select class="from-select" name="txtdocente" aria-label="Default select example">
	
	</select>
	<br>
	</br>


	<i class="fa-solid fa-clipboard"></i>
	<label>Promedio</label>
	<input type="text" class="form-control" name="txtpromedio" placeholder="Promedio">
	<br>
	</br>

	<i class="fa-solid fa-calendar-days"></i>
	<label>Fecha registro</label>
	<input type="text" class="form-control" name="txtregistro" placeholder="Fecha registro">
	<br>
	</br>

	<hr>
	</br>
	<button type="submit" >Agregar</button>

</form>
</body>
</html>