<?php
include_once('../../conexion.php');
class Estudiantes extends Conexion 
{

	public function __construct()
{
	$this->db = parent::__construct();

	}
//Inserta un estudiante 
	public function agregarestu($Nombrest,$Apellidost,$Documentost,$Correost, $Materiast,$Docentest,$Promediost,$Fecharegistrost)

	{

			$sql1 ="SELECT * FROM estudiantes WHERE Nombrestu = '$Nombrest'";
			$Resultado=$this->db->query($sql1);
			if($Resultado->rowCount() > 0){

				echo"<script> alert('El estudiante ya esta registrado');
				Window.location= '../pages/agregar.php';
				</script>";
		}else
		{
		$statement = $this->db->prepare("INSERT INTO estudiantes(Nombrestu, Apellidoestu, Documentoestu, Correoestu, Materia, Docente, Promedio, Fecha_registro )values(:Nombrest,:Apellidost, :Documentost, :Correost, :Materiast, :Docentest,:Promediost, :Fecharegistrost )");

		$statement->bindParam(':Nombrest',$Nombrest);
		$statement->bindParam(':Apellidost',$Apellidost);
		$statement->bindParam(':Documentost',$Documentost);
		$statement->bindParam(':Correost',$Correost);
		$statement->bindParam(':Materiast',$Materiast);
		$statement->bindParam(':Docentest',$Docentest);
		$statement->bindParam(':Promediost',$Promediost);
		$statement->bindParam(':Fecharegistrost',$Fecharegistrost);
		if($statement->execute())
		{
			echo"Estudiante registrado";
			header('Location: ../pages/agregar.php');

		}else
		{

			echo"No se puede realizar el registro del estudiante ";
			header('Location: ../pages/agregar.php');
		}
	}
}



//Función para seleccionar todos los usuarios con el rol administrador
	public function getestudiantes()
	{
		$row = null; 
		$statement=$this->db->prepare("SELECT * FROM estudiantes WHERE");
		$statement->execute();
		while($resul = $statement->fetch()) 
		{
			$row[]=$resul;
		}
		return $row;


	}
//Función para selecionar un estudiante por su ID
	public function getidestu($Id)
	{
		$row = null;
		$statement=$this->db->prepare("SELECT * FROM estudiantes WHERE id_estudiante=:Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();

	//obtener los resultados utilizando fetch()
		$resultado = $statement->fetch(PDO::FETCH_ASSOC);

		//Devolver los resultados 
		return $resultado;
	}

	
//Función para seleccionar los datos del estudiante  
	public function updateestu($Id,$Nombrest,$Apellidost,$Documentost,$Correost, $Materiast,$Docentest,$Promediost,$Fecharegistrost)
	{
		$statement=$this->db->prepare("UPDATE estudiantes SET id_estudiante=:Id, Nombrestu=:Nombrest,Apellidoestu=:Apellidost, Documentoestu=:Documentost, Correoestu=:Correost,Materia=:Materiast,Docente=:Docentest,Promedio=:Promediost,Fecha_registro=:Fecharegistrost WHERE id_usuario=$Id");

		$statement->bindParam(':Id',$Id);
		$statement->bindParam(':Nombrest',$Nombrest);
		$statement->bindParam(':Apellidost',$Apellidost);
		$statement->bindParam(':Documentost',$Documentost);
		$statement->bindParam(':Correost',$Correost);
		$statement->bindParam(':Materiast',$Materiast);
		$statement->bindParam(':Docentest',$Docentest);
		$statement->bindParam(':Promediost',$Promediost);
		$statement->bindParam(':Fecharegistrost',$Fecharegistrost);
		if($statement->execute())
		{
			header('Location: ../pages/index.php');
		}else
		{
			header('Location: ../pages/editar.php');
		}

	}

//función para eliminar un estudiante
	public function deleteestu($Id)
	{
		$statement=$this->db->prepare("DELETE  FROM estudiantes WHERE id_estudiante=:Id");
		$statement->bindParam(':Id',$Id);
		if ($statement->execute()) 
		{
			echo"Estudiante eliminado";
			header('Location:../pages/index.php');
		}else
		{
			echo"El estudiante no se puede eliminar";
			header('Location:../pages/eliminar.php');
		}

}
	
}





?>