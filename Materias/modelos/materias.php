<?php


include_once('../../conexion.php');
class Materias extends Conexion
{

	public function __construct()
	{
		$this->db = parent::__construct();
	}
//Insertar una materia 
	public function agregarmateria($Nombremat)
	{

			$sql1 ="SELECT * FROM materias WHERE Nombremate = '$Nombremat'";
			$Resultado=$this->db->query($sql1);
			if($Resultado->rowCount() > 0){

				echo"<script> alert('La  materia ya esta registrada');
				Window.location= '../pages/agregar.php';
				</script>";
		}else
		{
		$statement = $this->db->prepare("INSERT INTO materias(Nombremate )values(:Nombremat)");

		$statement->bindParam(':Nombremat',$Nombremat);

		if($statement->execute())
		{
			echo"Materia registrada";
			header('Location: ../pages/agregar.php');

		}else
		{

			echo"No se puede realizar el registro ";
			header('Location: ../pages/agregar.php');
		}
	}
}

//Funcion para mostrar o seleccionar todos los usuarios con el rol administrador 

	public function getmateria()
	{
		$row = null;
		$statement = $this->db->prepare("SELECT * FROM materias");
		$statement->execute();
		while ($resul = $statement->fetch()) 
		{
			$row[]=$resul;
		}
		return $row;
	}

//Función para selecionar una materia por su ID

	public function getidmateria($Id)
	{
		$row = null;
		$statement=$this->db->prepare("SELECT * FROM materias WHERE id_materia=:Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();

	//obtener los resultados utilizando fetch()
		$resultado = $statement->fetch(PDO::FETCH_ASSOC);

		//Devolver los resultados 
		return $resultado;
	}

//Función para seleccionar los datos de la materia

	public function updatemateria($Id,$Nombremat)
	{
		$statement=$this->db->prepare("UPDATE materias SET id_materia=:Id, Nombremate=:Nombremat WHERE id_materia=$Id");

		$statement->bindParam(':Id',$Id);
		$statement->bindParam(':Nombremat',$Nombremat);
		if($statement->execute())
		{
			header('Location: ../pages/index.php');
		}else
		{
			header('Location: ../pages/editar.php');
		}

	}

//Función para eliminar una materia 

	public function deletemateria($Id)
	{
		$statement=$this->db->prepare("DELETE * FROM materias WHERE id_materia=:Id");
		$statement->bindParam(':Id',$Id);
		if ($statement->execute()) 
		{
			echo"Materia eliminada";
			header('Location:../pages/agregar.php');
		}else
		{
			echo"La materia no se puede eliminar";
			header('Location:../pages/eliminar.php');
		}

}


	
}





?>