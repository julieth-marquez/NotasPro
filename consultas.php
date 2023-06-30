<?php

include_once('Conexion.php');


class Consulta extends Conexion
{
	public function __construct()
	{
		$this->db=parent::__construct();
	}

	public function getmaterias()
	{
		$row = null;
		$sta = $this->db->prepare("SELECT * FROM materias");
		$sta->execute();
		while($res = $sta->fetch())
		{
			$row[]=$res;
		}
		return $row;
	}

	public function getdocentes()
	{

	}
}





?>