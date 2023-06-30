<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilos3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Inicio de sesion Estudiantes</title>
</head>
<body>

<?php

require_once('../../Conexion.php');
require_once('../../consultas.php');
require_once('../modelos/estudiantes.php');

	$Id = $_GET['Id'];
	$consul = new Consulta();
	$row=$estudiante->getidestu($Id);

	if($row){


?>

<form action="../controladores/esditarestudiantes.php" method="POST">

	<h1>INICIO SESIÓN ESTUDIANTES</h1>
	<br>
	<hr>
</br>

	<i class="fa-solid fa-user"></i>
	<label>Nombre Estudiante</label>
	<input type="text" class="form-control" name="txtnombrest" placeholder="Ingrese su Nombre" value="<?php echo $row['Nombrestu'] ?>">
	</br>

	<i class="fa-solid fa-user"></i>
	<label>Apellido Estudiante</label>
	<input type="text" class="form-control" name="txtapellidost" placeholder="Ingrese su Apellido" value="<?php echo $row['Apellidoestu'] ?>">
	</br>

	<i class="fa-solid fa-address-card"></i>
	<label>Documento</label>
	<input type="text" name="txtdocumento" placeholder="Ingrese su documento" value="<?php echo $row['Documentoestu'] ?>">
	</br>

	<i class="fa-solid fa-envelope"></i>
	<label>Correo</label>
	<input type="text" class="form-control" name="txtcorreost" placeholder="Ingrese su email" value="<?php echo $row['Correoestu'] ?>" >
	</br>

	<i class="fa-solid fa-book"></i>
	<label for="perfil">Materia</label>
	<select class="from-select" name="txtmateria" aria-label="Default select example" value="<?php echo $row['Materia'] ?>">
		<option>Selecicionar</option>
		<?php

		$mate = $consul->getmaterias();
		if ($mate != null ) 
		{
			foreach($mate as $ma)
			{
		?>
		<option value="<?php echo $ma['Nombremate']?>"><?php echo $ma['Nombremate']; ?></option>
		<?php

		}
			}

		?>
	</select>
	</br>

	<i class="fa-solid fa-user"></i>
	<label for="perfil">Docente</label>
	<select class="from-select" name="txtdocente" aria-label="Default select example" value="<?php echo $row['Docente'] ?>">
		<option>Selecicionar</option>
		<?php
			$doce = $consul->getdocentes();
				if ($doce != null) 
				{
					foreach($doce as $do) {

		?>
	<option value="<?php echo $ma['Nombreusu']?>"><?php echo $ma['Nombreusu']; ?></option>
		<?php

		}
			}
		?>
		
	
	</select>
	<br>
	</br>


	<i class="fa-solid fa-clipboard"></i>
	<label>Promedio</label>
	<input type="text" class="form-control" name="txtpromedio" placeholder="Promedio" value="<?php echo $row['Promedio'] ?>">
	<br>

	<i class="fa-solid fa-calendar-days"></i>
	<label>Fecha registro</label>
	<input type="text" class="form-control" name="txtregistro" placeholder="Fecha registro" value="<?php echo $row['Fecha_registro'] ?>">
	<br>
	</br>

	<hr>
	</br>
	<button type="submit" >Agregar</button>

</form>
<?php }?>
</body>
</html>