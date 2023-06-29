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
<h1 style="color:green;text-align: center;">LISTADO DE MATERIAS</h1>
<div col="col-auto-mt-5">
<table class="table table-dark table-hover">
<tr>

<th>ID MATERIA</th>
<th>NOMBRE MATERIA</th>

</tr>
<tbody>
<?php
require_once('../../conexion.php');
require_once('../modelos/materias.php');

//crear el objeto para acceder a las funciones de la clase administrador
$obj = new Materias();
$datos = $obj->getmateria();


foreach($datos as $datos){
?>
<tr>
<td><?php echo $datos['id_materia'] ?></td>
<td><?php echo $datos['Nombremate'] ?></td>

<td><a href="editar.php?Id=<?php echo $datos['id_materia'] ?>" class="btn btn-danger">Actualizar</a></td>
<td><a href="eliminar.php?Id=<?php echo $datos['id_materia'] ?>" class="btn btn-primary">Eliminar</a></td>
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