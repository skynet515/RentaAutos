<?php
require_once('Conexion.php');
class Dreadmail
{
	private $conexion;
	public function __construct()
	{
		$this->conexion = Conexion::getInstance();
	}

	public function dconf($id)
	{
		$sql = "UPDATE reserva SET estado = 1 WHERE idreserva = $id;";
		$PrepareStatement = $this->conexion->getPrepareStatement($sql);
		return $PrepareStatement->execute();
	}
	public function delete($id)
	{
		$sql = "DELETE FROM  reserva  WHERE idreserva= $id;";
		$PrepareStatement = $this->conexion->getPrepareStatement($sql);
		return $PrepareStatement->execute();
	}

	public function detalleReserva($id)
	{
		$sql = "CALL detalleRenta($id);";
		try {
			$PrepareStatement = $this->conexion->getPrepareStatement($sql);
			$PrepareStatement->execute();
			$date = $PrepareStatement->fetch();
			return $date;
		} catch (PDOException $e) {
			echo 'Error' . $e;
			return false;
		}
	}

	public function dclien($lista)
	{
		$sql = "UPDATE tblcliente SET nombre=?,correo=?,tel=?,pais=?
		WHERE idcliente = ?;";

		try {
			$PreparedStatement = $this->conexion->getPrepareStatement($sql);
			$PreparedStatement->bindValue(1, $lista['nombre'], PDO::PARAM_STR);
			$PreparedStatement->bindValue(2, $lista['correo'], PDO::PARAM_STR);
			$PreparedStatement->bindValue(3, $lista['tel'], PDO::PARAM_STR);
			$PreparedStatement->bindValue(4, $lista['pais'], PDO::PARAM_STR);
			$PreparedStatement->bindValue(5, $lista['id'], PDO::PARAM_INT);
			$exec = $PreparedStatement->execute();
			return $exec;
		} catch (PDOException $e) {
			echo 'Error' . $e;
			return false;
		}
	}
}
