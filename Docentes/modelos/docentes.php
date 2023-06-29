<?php
include_once('../../conexion.php');
class Docentes extends Conexion
 {
 	 public function __construct()
 	 {
 	 	$this->db = parent::__construct();
 	 }
//Insertar Docente 
 	 public function agregardoceadd($Nombredocen,$Apellidodocen,$Documentodocen,$Correodocen,$Materiadocen,$Usuariodocen,$Passworddocen,$Perfildocen,$Estadodocen)
 	 {
 	 	$statement = $this->db->prepare("INSERT INTO docentes (Nombredoce, Apellidodoce, Documentodoce, Correodoce, Materiadoce, Usuariodoce, Passworddoce, Perfil, Estadodoce)values(:Nombredocen,:Apellidodocen, :Documentodocen, :Correodocen, :Materiadocen, :Usuariodocen, :Passworddocen, :Perfildocen, :Estadodocen)");

		$statement->bindParam(":Nombredocen",$Nombredocen);
		$statement->bindParam(":Apellidodocen",$Apellidodocen);
		$statement->bindParam(":Documentodocen",$Documentodocen);
		$statement->bindParam(":Correodocen",$Correodocen);
		$statement->bindParam(":Materiadocen",$Materiadocen);
		$statement->bindParam(":Usuariodocen",$Usuariodocen);
		$statement->bindParam(":Passworddocen",$Passworddocen);
		$statement->bindParam(":Perfildocen",$Perfildocen);
		$statement->bindParam(":Estadodocen",$Estadodocen);
	if($statement->execute())
		{
			echo"Docente registrado";
			header('Location: ../pages/index.php');

		}else
		{

			echo"No se puede realizar el registro del docente ";
			header('Location: ../pages/agregar.php');
		}
 	 }

 //Función para seleccionar a todos los usuarios con el rol docentes 
 	 public function getdocen()
	{
		$row = null;
		$statement = $this->db->prepare("SELECT * FROM docentes WHERE Perfil ='Docentes'");
		$statement->execute();
		while ($resul = $statement->fetch()) 
		{
			$row[]=$resul;
		}
		return $row;

	}
//Función para selecionar un docente por su ID 
	public function getiddocen($Id)
	{
		$row = null;
		$statement=$this->db->prepare("SELECT * FROM docentes WHERE id_docente=:Id");
		$statement->bindParam(':Id' ,$Id);
		$statement->execute();

		//obtener los resultados ustilizados fetch()
		$resultado = $statement->fetch(PDO::FETCH_ASSOC);

		//Decolver los resultados
		return $resultado;
		
	}
//Función para selecionar los datos del docente 
	public function updatedocen($Id,$Nombredocen,$Apellidodocen,$Documentodocen,$Correodocen, $Materiadocen,$Usuariodocen,$Passworddocen,$Perfildocen,$Estadodocen)
	{
		$statement=$this->db->prepare("UPDATE docentes SET id_docente=:Id, Nombredoce=:Nombredocen,Apellidodoce=:Apellidodocen,Documentodoce=:Documentodocen,Correodoce=:Correodocen,Materiadoce=:Materiadocen, Usuariodoce=:Usuariodocen, Passworddoce=:Passworddocen,Perfil=:Perfildocen,Estadodoce=:Estadodocen WHERE id_docente=$Id");

		$statement->bindParam(':Id',$Id);
		$statement->bindParam(':Nombredocen',$Nombredocen);
		$statement->bindParam(':Apellidodocen',$Apellidodocen);
		$statement->bindParam(':Documentodocen',$Documentodocen);
		$statement->bindParam(':Correodocen',$Correodocen);
		$statement->bindParam(':Materiadocen',$Materiadocen);
		$statement->bindParam(':Usuariodocen',$Usuariodocen);
		$statement->bindParam(':Passworddocen',$Passworddocen);
		$statement->bindParam(':Perfildocen',$Perfildocen);
		$statement->bindParam(':Estadodocen',$Estadodocen);
		if($statement->execute())
		{
			header('Location: ../pages/index.php');
		}else
		{
			header('Location:../pages/editar.php');
		}

	}
//Función para eliminar un docente 
	public function deletedocen($Id)
	{
		$statement=$this->db->prepare("DELETE  FROM docentes WHERE id_docente=:Id");
		$statement->bindParam(':Id',$Id);
		if ($statement->execute()) 
		{
			echo"Docente eliminado";
			header('Location:../pages/index.php');
		}else
		{
			echo"El docente no se puede eliminar";
			header('Location:../pages/eliminar.php');
		}

}

	
}





?>