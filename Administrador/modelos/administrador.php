<?php
include_once('../../conexion.php');
class Administrador extends Conexion
{
	public function __construct()
	{
		$this->db = parent::__construct();
	}
	//inserta un ususario
	public function agregaradadd($Nombread,$Apellidoad,$Usuarioad,$passwordad,$Perfil,$Estado)
	{
		$statement = $this->db->prepare("INSERT INTO  usuarios (Nombreusu,Aoellidousu,Usuario,Passwordusu,Perfil,Estado) values(:Nombread, :Apellidoad, :Usuarioad, :passwordad, :Perfil, :Estado)");

		$statement->bindParam(':Nombread',$Nombread);
		$statement->bindParam(':Apellidoad',$Apellidoad);
		$statement->bindParam(':Usuarioad',$Usuarioad);
		$statement->bindParam(':passwordad',$passwordad);
		$statement->bindParam(':Perfil',$Perfil);
		$statement->bindParam(':Estado',$Estado);
		if($statement->execute())
		{
			echo "Usuario registrado";
			header('Location:  ../pages/idex.php');
		}else
		{
			echo "No se puede realizar el registro";
			header('Location: ../pages/agregar.php');
		}
	}
	//funcion para mostrar o seleccionar todos los usuarios con el rol administrador 
	public function getad()
	{
		$row = null;
		$statement = $this->db->prepare("SELECT * FROM usuarios WHERE Perfil = 'Administrador'");
		$statement->execute();
		while ($resul = $statement->fetch()) 
		{
			$row[]=$resul;
		}
		return $row;
	}
	//funcion para seleccionar un usuario por su id
	public function getidad($Id)
	{
		$row = null;
		$statement=$this->db->prepare("SELECT * FROM usuarios WHERE  Perfil = 'Administrador' AND id_usuario=:$Id");
		$statement->binParam(':$Id' ,$Id);
		$statement->execute();
		while ($resul = $statement->fetch()) 
		{
			$row=$resul;
		}
		return $row;
	}
	//funcion para actualizar los datos del usuario 
	public function updatead($Id,$Nombread,$Apellidoad,$Usuarioad,$passwordad,$Estadoad)
	{
		$statement=$this->db->prepare("UPDATE usuarios SET Nombreusu= :Nombread, Aoellidousu=: Apellidoad, Usuario=: Usuarioad, Passwordusu=: Passwordad, Estado=:Estadoad WHERE id_usuario=$Id");
		$statement->bindParam(':Id', $Id);
		$statement->bindParam(':Nombread',$Nombread);
		$statement->bindParam(':Apellidoad', $Apellidoad);
		$statement->bindParam(':Usuarioad', $Usuarioad);
		$statement->bindParam(':passwordad', $passwordad);
		$statement->bindParam(':Estadoad', $Estadoad);
		if($statement->binParam())
		{
			header('Location: ../pages/idex.php');
		}else
		{
			header('Location: ../pages/editar.php');
		}
	}
	//funcion para eliminar un usuario
	public function deletead($Id)
	{
		$statement=$this->db->prepare("DELETE * FROM usuarios WHERE id_usuario=:Id");
		$statement->binParam(':Id',$Id);
		if($statement->execute())
		{
			echo "Usuario eliminado";
			header('Location: ../pages/idex.php');
		}else
		{
			echo "El Usuariono se puede eliminar";
			header('Location: ../pages/eliminar.php');
		}
	}

	}



?>