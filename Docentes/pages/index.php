<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title>REGISTRO DE USUARIOS</title>
</head>
<body>
<div class="container">
	<h1 style="color:red;text-align: center;">LISTADO DE DOCENTES</h1>
<div col="col-auto-mt-5">
	<table class="table table-dark table-hover">
		<tr>

			<th>ID USUARIO</th>
			<th>NOMBRE</th>
			<th>APELLIDO</th>
			<th>DOCUMENTO</th>
			<th>CORREO</th>
			<th>MATERIA</th>
			<th>USUARIO</th>
			<th>PERFIL</th>
			<th>ESTADO</th>
			
		</tr>
		<tbody>
			<?php 
			require_once('../../conexion.php');
			require_once('../modelos/docentes.php');

				//crear el objeto para acceder a las funciones de la clase administrador 
			$obj = new Docentes();
			$datos = $obj->getdocen();

			

			foreach($datos as $datos){
				?>
		<tr>
			<td><?php echo $datos['id_docente'] ?></td>
			<td><?php echo $datos['Nombredoce'] ?></td>
			<td><?php echo $datos['Apellidodoce'] ?></td>
			<td><?php echo $datos['Documentodoce'] ?></td>
			<td><?php echo $datos['Correodoce'] ?></td>
			<td><?php echo $datos['Materiadoce'] ?></td>
			<td><?php echo $datos['Usuariodoce'] ?></td>
			<td><?php echo $datos['Perfil'] ?></td>
			<td><?php echo $datos['Estadodoce'] ?></td>
			<td><a href="editar.php?Id=<?php echo $datos['id_docente'] ?>" class="btn btn-danger">ACTUALIZAR</a></td>
			<td><a href="eliminar.php?Id=<?php echo $datos['id_docente'] ?>" class="btn btn-primary">ELIMINAR</a></td>
	<?php } ?>

		</tr>


		</tbody>
	</table>
</div>
	
</div>
	</section>
</div>
</body>
</html>