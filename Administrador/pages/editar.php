<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilos1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>Actualización de datos</title>

</head>
<body>

	<?php
	require_once('../../conexion.php');
	require_once('../modelos/administrador.php');

	$Id = $_GET['Id'];
	$admmin = new Administrador();
	$row=$admin->getidad($Id);

	if($row){
		
?>
	
<form action="../controladores/editarusuario.php" method="POST">
	<input type="hidden" name="Id" value="<?php echo $Id ?>">

	<h1>ACTUALIZAR DATOS</h1>
</br>
	<hr>
</br>

	<i class="fa-solid fa-user"></i>
	<label>Nombre</label>
	<input type="text" class="form-control" name="txtnombre" placeholder="Ingrese su Nombre" value="<?php echo $row['Nombreusu']?>">
	<br>
	</br>


	<i class="fa-solid fa-user"></i>
	<label>Apellido</label>
	<input type="text" class="form-control" name="txtapellido" placeholder="Ingrese su Apellido" value="<?php echo $row['Apellidousu']?>">
	<br>
	</br>


	<i class="fa-solid fa-user"></i>
	<label>Usuario</label>
	<input type="text" name="txtusuario" placeholder="Ingrese un usuario" value="<?php  echo $row['Usuario']?>">
	<br>
	</br>


	<i class="fa-solid fa-unlock"></i>
	<label>ClaveUs</label>
	<input type="text" class="form-control" name="txtpassword" placeholder="Ingrese su contraseña" value="<?php echo $row['Passwordusu']?>">
	<br>
	</br>


	<i class="fa-solid fa-user"></i>
	<label for="perfil">PerfilUs</label>
	<select class="from-select" name="txtperfil" aria-label="Default select example" value="<?php  echo $row['Perfil']?>">
	<option select>Elegir opcion</option>
	<option value="Administrador">Administrador</option>
	<option value="Docentes">Docentes</option>
	</select>
	<br>
	</br>


	<i class="fa-solid fa-user"></i>
	<label for="perfil">Estado</label>
	<select class="from-select" name="txtestado" aria-label="Default select example" value="<?php  echo $row['Estado']?>">
	<option select>Elegir opcion</option>
	<option value="Activo">Activo</option>
	<option value="No activo">No activo</option>
	</select>
	<br>
	</br>

	<hr>
	</br>
	<button type="submit" >Actualizar</button>

</form>

<?php }?>


</body>
</html>