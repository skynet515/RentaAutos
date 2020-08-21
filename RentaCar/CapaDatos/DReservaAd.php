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
            $data=$PrepareStatement->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo 'Error: ' . $e;
        }
    }
}
