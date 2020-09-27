<?php
include_once('../../CapaDatos/Dmas.php');
class Nautosdesp
{
	private $dautos;
	public function __construct()
	{
		$this->dautos = new Dmas();
	}

	public function listarautos()
	{
		return $this->dautos->listarautosDB();
	}
}