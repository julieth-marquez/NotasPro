<?php
include_once('../conexion.php');
class Administrador extends Conexion();
{
	public function __construct()
	{
		$this->db = parent::__construct();
	}
	public function agregarad add($Nombread,$Apellidoad,$Usuarioad,$passwordad,$Perfilad,$Estadoad)
	{
		$statement = $this->bd->prepare("INSERT INTO  usurios (Nombreusu,Aoellidousu,Usuario,Passwordusu,Perfil,Estado) values(:Nombread, :Apellidoad, :Usuarioad, :passwordad, :Perfilad, :Estadoad)");

		$statement->binParam(":Nombread",$Nombread);
		$statement->binParam(":Apellidoad",$Apellidoad);
		$statement->binParam(":Usuarioad",$Usuarioad);
		$statement->binParam(":passwordad",$passwordad);
		$statement->binParam(":Perfilad",$Perfilad);
		$statement->binParam(":Estadoad",$Estadoad);
		if($statement->execute())
		{
			echo "Usuario registrado";
		}else
		{
			echo "No se puede realizar el registro";
		}
	}

}

?>