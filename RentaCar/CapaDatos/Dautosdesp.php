<?php
require_once('Conexion.php');

class DautosDesp
{

	private $conexion;

	public function __construct()
	{
		$this->conexion = Conexion::getInstance();
	}

	//
	public function listarautosDB()
	{
		$sql = "SELECT aut.cant_asientos, aut.idautos, marca.marca, modelo.modelo, aut.precio, tra.transmision, img.img, aut.capacidad
		FROM tblautos AS aut INNER JOIN tblmarca AS marca ON aut.idmarca=marca.idmarca INNER JOIN tblmodelo AS 
		modelo ON aut.idmodelo=modelo.idmodelo INNER JOIN tbltransmision AS tra ON aut.idtransmision=tra.idtransmision
		INNER JOIN tblimg AS img ON aut.idimg=img.idimg WHERE aut.estado=1 AND aut.idrentacar=1";

		try {
			$PrepareStatement = $this->conexion->getPrepareStatement($sql);
			$PrepareStatement->execute();
			return $PrepareStatement->fetchAll();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}
}
