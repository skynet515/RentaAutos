<?php
include_once('../../CapaDatos/Dautosdesp.php');
class Nautosdesp
{
	private $dautos;

	public function __construct()
	{
		$this->dautos = new DautosDesp();
	}

	public function listarautos()
	{
		return $this->dautos->listarautosDB();
	}
}
