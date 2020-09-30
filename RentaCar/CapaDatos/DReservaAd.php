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
        $sql = "CALL activarAuto;";
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

    public function ActivarAuto($id)
    {
        $sql = "UPDATE tblautos set estado=1 where idautos=?";
        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->bindValue(1, $id, PDO::PARAM_INT);
            return $PrepareStatement->execute();
        } catch (PDOException $e) {
            echo 'Error' . $e;
        }
    }
}
