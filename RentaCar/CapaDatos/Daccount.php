<?php
include_once('Conexion.php');
class Daccount
{
	private $cnn;

	public function __construct()
	{
		$this->conexion = Conexion::getInstance();
	}

	public function selectAdmin($id)
	{
		$sql = "SELECT * FROM administrador WHERE idAdmin=$id";
		try {
			$PrepareStatement = $this->conexion->getPrepareStatement($sql);
			$PrepareStatement->execute();
			return $PrepareStatement->fetch();
		} catch (PDOException $e) {
			echo "Error: " . $e;
			return false;
		}
	}

	public function updateAdmin($lista)
	{
		$sql1 = "SELECT passw FROM administrador WHERE idAdmin=?";

		$sql = "UPDATE administrador SET direccion = ?, telefono= ?, passw=? WHERE idAdmin = ?;";

		try {
			$PreparedStatement = $this->conexion->getPrepareStatement($sql1);
			$PreparedStatement->bindValue(1, $lista['id'], PDO::PARAM_INT);
			$PreparedStatement->execute();
			$exec = $PreparedStatement->fetch();

			if ($exec['passw'] == $lista['passwold']) {
				$PreparedStatement = $this->conexion->getPrepareStatement($sql);
				$PreparedStatement->bindValue(1, $lista['dir'], PDO::PARAM_STR);
				$PreparedStatement->bindValue(2, $lista['tel'], PDO::PARAM_STR);
				$PreparedStatement->bindValue(3, $lista['passnew'], PDO::PARAM_STR);
				$PreparedStatement->bindValue(4, $lista['id'], PDO::PARAM_INT);
				return  $PreparedStatement->execute();
			}

			return false;
		} catch (PDOException $e) {
			echo 'Error' . $e;
			return false;
		}
	}
}
