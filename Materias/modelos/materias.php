<?php
include_once('../../conexion.php');
class Materias extends Conexion
{
	public function __construct()
	{
		$this->db = parent::__construct();
	}
	//inserta una materia
	public function agregarmateadd($Nombremater)
	{
		$statement = $this->db->prepare("INSERT INTO  materias (Nombremate) values(:Nombremater)");

		$statement->bindParam(":Nombremater",$Nombremater);
		if($statement->execute())
		{
			echo "Materia registrado";
			header('Location:  ../pages/index.php');
		}else
		{
			echo "No se puede realizar el registro";
			header('Location: ../pages/agregar.php');
		}
	}
	//funcion para mostrar o seleccionar todos los usuarios con el rol administrador 
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
	//funcion para seleccionar un usuario por su id
	public function getidmateria($Id)
	{
		$row = null;
		$statement=$this->db->prepare("SELECT * FROM materias WHERE id_materia=:Id");
		$statement->bindParam(':Id' ,$Id);
		$statement->execute();

		//obtener los resultados ustilizados fetch()
		$resultado = $statement->fetch(PDO::FETCH_ASSOC);

		//Decolver los resultados
		return $resultado;
		
	
	}
	//funcion para actualizar los datos del usuario 
	public function updatemateria($Id,$Nombremater)
	{
		$statement=$this->db->prepare("UPDATE materias SET id_materia=:Id, Nombremate=:Nombremater WHERE id_materia=$Id");

		$statement->bindParam(':Id',$Id);
		$statement->bindParam(':Nombremater',$Nombremater);
		if($statement->execute())
		{
			header('Location: ../pages/index.php');
		}else
		{
			header('Location:../pages/editar.php');
		}
	}
	//funcion para eliminar un usuario
	public function deletemateria($Id)
	{
		$statement=$this->db->prepare("DELETE  FROM materias WHERE id_materia=:Id");
		$statement->bindParam(':Id',$Id);
		if($statement->execute())
		{
			echo "Materia eliminado";
			header('Location: ../pages/index.php');
		}else
		{
			echo "La Materia no se puede eliminar";
			header('Location: ../pages/eliminar.php');
		}
	}

}



?>