<?php
include_once('../../conexion.php');
class Estudiantes extends Conexion
{
	public function __construct()
	{
		$this->db = parent::__construct();
	}
	//inserta un estudiante
	public function agregarestadd($Nombreadm,$Apellidoadm,$Documentoadm,$Correoadm,$Materiaadm,$Docenteadm,$Promedioadm)
	{
		$statement = $this->db->prepare("INSERT INTO  estudiantes (Nombreest ,Apellidoest,Documentoest,Correoest,Materia,Docente,Promedio ) values(:Nombreadm, :Apellidoadm, :Documentoadm, :Correoadm, :Materiaadm, :Docenteadm, :Promedioadm)");

		$statement->bindParam(':Nombreadm',$Nombreadm);
		$statement->bindParam(':Apellidoadm',$Apellidoadm);
		$statement->bindParam(':Documentoadm',$Documentoadm);
		$statement->bindParam(':Correoadm',$Correoadm);
		$statement->bindParam(':Materiaadm',$Materiaadm);
		$statement->bindParam(':Docenteadm',$Docenteadm);
		$statement->bindParam(':Promedioadm',$Promedioadm);
		if($statement->execute())
		{
			echo "Estudiante registrado";
			header('Location:  ../pages/index.php');
		}else
		{
			echo "No se puede realizar el registro";
			header('Location: ../pages/agregar.php');
		}
	}
	//funcion para mostrar o seleccionar todos los estudiantes con el rol de estudiante 
	public function getest()
	{
		$row = null;
		$statement = $this->db->prepare("SELECT * FROM estudiantes ");
		$statement->execute();
		while ($resul = $statement->fetch()) 
		{
			$row[]=$resul;
		}
		return $row;
	}
	//funcion para seleccionar un estudiante por su id
	public function getidest($Id)
	{
		$row = null;
		$statement=$this->db->prepare("SELECT * FROM estudiantes WHERE  id_estudiante = :$Id");
		$statement->binParam(':$Id' ,$Id);
		$statement->execute();
		while ($resul = $statement->fetch()) 
		{
			$row=$resul;
		}
		return $row;
	}
	//funcion para actualizar los datos del estudiante 
	public function updateest($Id,$Nombreadm,$Apellidoadm,$Documentoadm,$Correoadm,$Materiaadm,$Docenteadm,$Promedioadm)
	{
		$statement=$this->db->prepare("UPDATE estudiantes SET Nombreest= :Nombreadm, Apellidoest=: Apellidoadm,Documentoest =:Documentoadm, Correoest=: Correoadm, Materia=:Materiaadm, Docente=:Docenteadm, Promedio=:Promedioadm WHERE id_estudiante=$Id");
		$statement->binParam(':Id', $Id);
		$statement->binParam(':Nombreadm',$Nombreadm);
		$statement->binParam(':Apellidoadm', $Apellidoadm);
		$statement->binParam(':Documentoadm', $Documentoadm);
		$statement->binParam(':Correoadm', $Correoadm);
		$statement->binParam(':Materiaadm', $Materiaadm);
		$statement->binParam(':Docenteadm', $Docenteadm);
		$statement->binParam(':Promedioadm', $Promedioadm);
		if($statement->binParam())
		{
			header('Location: ../pages/idex.php');
		}else
		{
			header('Location: ../pages/editar.php');
		}
	}
	//funcion para eliminar un estudiante
	public function deleteest($Id)
	{
		$statement=$this->db->prepare("DELETE * FROM estudiantes WHERE id_estudiante=:Id");
		$statement->binParam(':Id',$Id);
		if($statement->execute())
		{
			echo "Estudiante eliminado";
			header('Location: ../pages/idex.php');
		}else
		{
			echo "El Usuariono se puede eliminar";
			header('Location: ../pages/eliminar.php');
		}
	}

	}



?>