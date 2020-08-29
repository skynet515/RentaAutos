<?php
require_once('Conexion.php');
class Dreadmail
{
	private $conexion;
	public function __construct()
	{
		$this->conexion = Conexion::getInstance();
	}

	public function dconf($id, $idaut)
	{
		$sql = "UPDATE reserva SET estado = 1 WHERE idreserva = $id;";
		$PrepareStatement = $this->conexion->getPrepareStatement($sql);
		$exec = $PrepareStatement->execute();
		if ($exec) {
			$sql = "UPDATE tblautos SET estado = 0 WHERE idautos = $idaut;";
			$PrepareStatement = $this->conexion->getPrepareStatement($sql);
			return $PrepareStatement->execute();
		}
		//Cambiar estado del auto
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

	public function dres($lista)
	{
		$sql = "UPDATE reserva SET 
		f_recogida=?, H_recogida=?, direc_recogida=?,
		f_entrega=?, H_entrega=?, direc_entrega=?,
		cant_dia=?, total=?
		WHERE idreserva =?;";

		$PreparedStatement = $this->conexion->getPrepareStatement($sql);
		$PreparedStatement->bindValue(1, $lista['f_recogida'], PDO::PARAM_STR);
		$PreparedStatement->bindValue(2, $lista['h_recogida'], PDO::PARAM_STR);
		$PreparedStatement->bindValue(3, $lista['d_recogida'], PDO::PARAM_STR);

		$PreparedStatement->bindValue(4, $lista['f_entrega'], PDO::PARAM_STR);
		$PreparedStatement->bindValue(5, $lista['h_entrega'], PDO::PARAM_STR);
		$PreparedStatement->bindValue(6, $lista['d_entrega'], PDO::PARAM_STR);

		$PreparedStatement->bindValue(7, $lista['cant_dia'], PDO::PARAM_INT);
		$PreparedStatement->bindValue(8, $lista['total'], PDO::PARAM_INT);

		$PreparedStatement->bindValue(9, $lista['id'], PDO::PARAM_INT);
		return  $PreparedStatement->execute();
	}
}
