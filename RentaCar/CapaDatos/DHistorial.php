<?php
include('Conexion.php');
class DHistorial
{
    private $conexion;

    public function __construct()
    {
        $this->conexion = Conexion::getInstance();
    }
    //Paginacion
    public function count()
    {
        $sql = " SELECT  COUNT(*) as numR FROM reserva AS a INNER JOIN tblcliente AS b ON a.idcliente=b.idcliente 
        INNER JOIN tblautos AS aut ON a.idauto=aut.idautos INNER JOIN tblmodelo AS mo ON aut.idmodelo=mo.idmodelo
        INNER JOIN tblmarca AS marc ON aut.idmarca=marc.idmarca
        WHERE a.estado=1  ORDER BY f_solicitud DESC ";
        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->execute();
            return $PrepareStatement->fetch();
        } catch (PDOException $e) {
            echo "Error" . $e;
            return false;
        }
    }


    public function Mostrar($desde, $numXpagina)
    {
        $sql = "SELECT b.nombre, DATE_FORMAT(a.f_solicitud, '%d/%m/%y') AS f_solicitud, marc.marca, mo.modelo, a.idreserva
        FROM reserva AS a INNER JOIN tblcliente AS b ON a.idcliente=b.idcliente 
        INNER JOIN tblautos AS aut ON a.idauto=aut.idautos INNER JOIN tblmodelo AS mo ON aut.idmodelo=mo.idmodelo
        INNER JOIN tblmarca AS marc ON aut.idmarca=marc.idmarca
        WHERE a.estado=1  ORDER BY f_solicitud DESC Limit $desde,$numXpagina";
        try {
            $PrepareStatement = $this->conexion->getPrepareStatement($sql);
            $PrepareStatement->execute();
            return $PrepareStatement->fetchAll();
        } catch (PDOException $e) {
            echo "Error" . $e;
            return false;
        }
    }
}
