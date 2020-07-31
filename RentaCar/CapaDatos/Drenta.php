<?php
require_once('Conexion.php');
class Drenta
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Conexion::getInstance();
    }

    public function portada($idauto)
    {
        $sql = "SELECT marca.marca, modelo.modelo, aut.precio, tra.transmision, img.img, aut.capacidad, img.portada, aut.cant_puertas
        FROM tblautos AS aut INNER JOIN tblmarca AS marca ON aut.idmarca=marca.idmarca INNER JOIN tblmodelo AS 
        modelo ON aut.idmodelo=modelo.idmodelo INNER JOIN tbltransmision AS tra ON aut.idtransmision=tra.idtransmision
        INNER JOIN tblimg AS img ON aut.idimg=img.idimg WHERE aut.idautos=$idauto";

        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->execute();
            return $PrepareStatement->fetch();
        } catch (PDOException $e) {
            echo 'Error' . $e;
            return false;
        }
    }

    public function images($idauto)
    {
        $sql = "SELECT repo.img
        FROM tblrepositorio AS repo INNER JOIN tblautos AS au ON au.idautos=repo.idauto
        WHERE au.idautos=$idauto";

        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->execute();
            return $PrepareStatement->fetchAll();
        } catch (PDOException $e) {
            echo 'Error' . $e;
            return false;
        }
    }

    public function registrarRenta($lista, $tabla)
    {
        $sql = "INSERT INTO $tabla (idauto, f_recogida, f_finres, cant_dia, 
                total, direc_recogida, direc_entrega, H_recogida, H_entrega) VALUES (?,?,?,?,?,?,?,?,?)";
        try {
            $PreparedStatement = $this->conexion->getPrepareStatement($sql);

            $PreparedStatement->bindValue(1, $lista['id'], PDO::PARAM_INT);
            $PreparedStatement->bindValue(2, $lista['f_recogida'], PDO::PARAM_STR);
            $PreparedStatement->bindValue(3, $lista['f_entrega'], PDO::PARAM_INT);
            $PreparedStatement->bindValue(4, 9, PDO::PARAM_INT);
            $PreparedStatement->bindValue(5, 100, PDO::PARAM_INT);
            $PreparedStatement->bindValue(6, $lista['d_recogida'], PDO::PARAM_STR);
            $PreparedStatement->bindValue(7, $lista['d_entrega'], PDO::PARAM_STR);
            $PreparedStatement->bindValue(8, $lista['h_recogida'], PDO::PARAM_STR);
            $PreparedStatement->bindValue(9, $lista['h_entrega'], PDO::PARAM_STR);
            $f = $PreparedStatement->execute();
            return $f;
        } catch (PDOException $e) {
            $e = "0";
            echo "Error: " . $e;
            return false;
        }
    }
}
