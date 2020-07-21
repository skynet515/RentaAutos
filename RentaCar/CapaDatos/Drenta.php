<?php
require_once ('Conexion.php');
class Drenta{
    private $conexion;

    public function __construct(){
        $this->conexion=Conexion::getInstance();
    }

    public function portada($idauto)
    {
        $sql="SELECT marca.marca, modelo.modelo, aut.precio, tra.transmision, img.img, aut.capacidad, img.portada, aut.cant_puertas
        FROM tblautos AS aut INNER JOIN tblmarca AS marca ON aut.idmarca=marca.idmarca INNER JOIN tblmodelo AS 
        modelo ON aut.idmodelo=modelo.idmodelo INNER JOIN tbltransmision AS tra ON aut.idtransmision=tra.idtransmision
        INNER JOIN tblimg AS img ON aut.idimg=img.idimg WHERE aut.idautos=$idauto";

        try{
            $PrepareStatement=$this->conexion->getPrepareStatement($sql);
            $PrepareStatement->execute();
            return $PrepareStatement->fetch();
        }catch(PDOException $e){
            echo 'Error' . $e;
            return false;
        }
    }

    public function images($idauto){
        $sql="SELECT repo.img
        FROM tblrepositorio AS repo INNER JOIN tblautos AS au ON au.idautos=repo.idauto
        WHERE au.idautos=$idauto";

        try{
            $PrepareStatement=$this->conexion->getPrepareStatement($sql);
            $PrepareStatement->execute();
            return $PrepareStatement->fetchAll();
        }catch(PDOException $e){
            echo 'Error' . $e;
            return false;
        }
    }
}
?>