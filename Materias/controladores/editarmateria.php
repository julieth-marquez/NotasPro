<?php
 include_once('../../Conexion.php');
 require_once('../modelos/materias.php');

 $materia = new Materias();
if($_POST)
{
 $Id = $_POST['Id'];
 $Nombremate = $_POST['txtnombremateria'];


$materia->updatead($Id, $Nombremate);

}
?>