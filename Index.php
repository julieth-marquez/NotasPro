<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilos2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>Inicio de sesion</title>
</head>
<body>
<form action="../controladores/agregarusuarios.php" method="POST">
	<h1>INICIAR SESIÓN</h1>
</br>
<hr>
</br>

	<i class="fa-solid fa-user"></i>
	<label>Usuario</label>
	<input type="text" class="form-control" name="txtusuario" placeholder="Ingrese su usuario">
	<br>
	</br>


	<i class="fa-solid fa-user"></i>
	<label>Contraseña</label>
	<input type="text" class="form-control" name="txtcontraseña" placeholder="Ingrese su contraseña">
	<br>
	</br>

	<hr>
	</br>
	<a href="CrearCuenta.php">Crear Cuenta</a>
	<button type="submit" >Ingresar</button>

</form>
</body>
</html>