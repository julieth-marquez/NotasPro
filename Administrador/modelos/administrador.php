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
		//verificar de que no exista un usuario en la db
		$sql1 = "SELECT * FROM usuarios WHERE Usuario = '$Usuarioad'";
		$Resultado=$this->db->query($sql1);
		if ($Resultado->rowCount() > 0){

			echo "<script>
			alert('El usuario ya esta registrado');
			window.location = '../pages/agregar.php';
			</script>";
	}else
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
			header('Location:  ../pages/agregar.php');
		}else
		{
			echo "No se puede realizar el registro";
			header('Location: ../pages/agregar.php');
		}
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
		$statement=$this->db->prepare("SELECT * FROM usuarios WHERE id_usuario=:Id");
		$statement->bindParam(':Id' ,$Id);
		$statement->execute();

		//obtener los resultados ustilizados fetch()
		$resultado = $statement->fetch(PDO::FETCH_ASSOC);

		//Decolver los resultados
		return $resultado;
		
	}

	//funcion para actualizar los datos del usuario 
	public function updatead($Id,$Nombread, $Apellidoad, $Usuarioad, $Passwordad,$perfil,$Estadoad){

        $statement=$this->db->prepare("UPDATE usuarios SET id_usuario=:Id, Nombreusu=:Nombread, Aoellidousu=:Apellidoad,Usuario=:Usuarioad, Passwordusu=:Passwordad,Perfil=:Perfil, Estado=:Estadoad WHERE id_usuario=$Id" );
        $statement->bindparam(":Id",$Id);
        $statement->bindParam(":Nombread", $Nombread);
        $statement->bindParam(":Apellidoad", $Apellidoad);
        $statement->bindParam(":Usuarioad", $Usuarioad);
        $statement->bindParam(":Passwordad", $Passwordad);
        $statement->bindParam(":Perfil", $perfil);
        $statement->bindParam(":Estadoad", $Estadoad);
        if($statement->execute()){
            echo"Usuario actualizado";
            header('Location: ../Pages/index.php');
        }else{
            echo "No se pudo realizar la actualizacion";
            header('Location: ../Pages/editar.php');
        }
    }
	//funcion para eliminar un usuario
	public function deletead($Id)
	{
		$statement=$this->db->prepare("DELETE  FROM usuarios WHERE id_usuario=:Id");
		$statement->bindParam(':Id',$Id);
		if($statement->execute())
		{
			echo "Usuario eliminado";
			header('Location: ../pages/index.php');
		}else
		{
			echo "El Usuario no se puede eliminar";
			header('Location: ../pages/eliminar.php');
		}
	}

	}



?>