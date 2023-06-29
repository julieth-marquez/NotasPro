<?php

include_once('../../conexion.php');
class Administrador extends Conexion
{

public function __construct()
{
	$this->db = parent::__construct();

	}
//Inserta un usuario
	public function agregarad($Nombread,$Apellidoad,$Usuarioad,$Passwordad, $Perfilad,$Estadoad)

	{

			$sql1 ="SELECT * FROM usuarios WHERE Usuario = '$Usuarioad'";
			$Resultado=$this->db->query($sql1);
			if($Resultado->rowCount() > 0){

				echo"<script> alert('El usuario ya esta registrado');
				Window.location= '../pages/agregar.php';
				</script>";
		}else
		{
		$statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu, Apellidousu, Usuario, Passwordusu, Perfil, Estado )values(:Nombread,:Apellidoad, :Usuarioad, :Passwordad, :Perfilad, :Estadoad )");

		$statement->bindParam(':Nombread',$Nombread);
		$statement->bindParam(':Apellidoad',$Apellidoad);
		$statement->bindParam(':Usuarioad',$Usuarioad);
		$statement->bindParam(':Passwordad',$Passwordad);
		$statement->bindParam(':Perfilad',$Perfilad);
		$statement->bindParam(':Estadoad',$Estadoad);
		if($statement->execute())
		{
			echo"Usuario registrado";
			header('Location: ../pages/agregar.php');

		}else
		{

			echo"No se puede realizar el registro ";
			header('Location: ../pages/agregar.php');
		}
	}
}



//Función para seleccionar todos los usuarios con el rol administrador
	public function getad()
	{
		$row = null; 
		$statement=$this->db->prepare("SELECT * FROM usuarios WHERE Perfil='Administrador'");
		$statement->execute();
		while($resul = $statement->fetch()) 
		{
			$row[]=$resul;
		}
		return $row;


	}
//Función para selecionar un usuario por su ID
	public function getidad($Id)
	{
		$row = null;
		$statement=$this->db->prepare("SELECT * FROM usuarios WHERE id_usuario=:Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();

	//obtener los resultados utilizando fetch()
		$resultado = $statement->fetch(PDO::FETCH_ASSOC);

		//Devolver los resultados 
		return $resultado;
	}

	
//Función para seleccionar los datos del usuario 
	public function updatead($Id,$Nombread,$Apellidoad,$Usuarioad,$Passwordad, $Perfilad,$Estadoad)
	{
		$statement=$this->db->prepare("UPDATE usuarios SET id_usuario=:Id, Nombreusu=:Nombread,Apellidousu=:Apellidoad, Perfil=:Perfilad, Usuario=:Usuarioad,Passwordusu=:Passwordad,Estado=:Estadoad WHERE id_usuario=$Id");

		$statement->bindParam(':Id',$Id);
		$statement->bindParam(':Nombread',$Nombread);
		$statement->bindParam(':Apellidoad',$Apellidoad);
		$statement->bindParam(':Usuarioad',$Usuarioad);
		$statement->bindParam(':Passwordad',$Passwordad);
		$statement->bindParam(':Perfilad',$Perfilad);
		$statement->bindParam(':Estadoad',$Estadoad);
		if($statement->execute())
		{
			header('Location: ../pages/index.php');
		}else
		{
			header('Location: ../pages/editar.php');
		}

	}

//función para eliminar un usuario 
	public function deletead($Id)
	{
		$statement=$this->db->prepare("DELETE  FROM usuarios WHERE id_usuario=:Id");
		$statement->bindParam(':Id',$Id);
		if ($statement->execute()) 
		{
			echo"Usuario eliminado";
			header('Location:../pages/index.php');
		}else
		{
			echo"El Usuario no se puede eliminar";
			header('Location:../pages/eliminar.php');
		}

}


}
	






?>