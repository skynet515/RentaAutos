<?php
require('Conexion.php');
class DReservaAd
{

    private $conexion;
    public function __construct()
    {
        $this->conexion = Conexion::getInstance();
    }

    public function MostrarAutos()
    {
        $sql = "CALL AutosReserva;";
        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->execute();
            $data = $PrepareStatement->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo 'Error: ' . $e;
        }
    }

    //Darle vida al boton reactivar auto

    public function ActivarAuto($lista)
    {
        $sql = "UPDATE tblautos set estado=? where idautos=?";
        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $lista['estado'], PDO::PARAM_INT);
            $PrepareStatement->bindValue(2, $lista['id'], PDO::PARAM_INT);
            return $PrepareStatement->execute();
        } catch (PDOException $e) {
            echo 'Error' . $e;
        }
    }
}
