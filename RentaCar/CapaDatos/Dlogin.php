<?php
require_once('Conexion.php');
class DLogin
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Conexion::getInstance();
    }

    public function VerificarUser($usuario, $contraseña)
    {
        $sql = "SELECT * FROM administrador WHERE correo='" . $usuario . "' AND passw='" . $contraseña . "'";
        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->execute();
            return $PrepareStatement->fetch();
        } catch (PDOException $e) {
            echo "Error: " . $e;
            return false;
        }
    }
}
