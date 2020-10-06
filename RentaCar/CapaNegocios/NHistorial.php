<?php
include_once('../../../CapaDatos/DHistorial.php');
class NHistorial
{
private $dreserva;

public function __construct()
{
    $this->dreserva= new DHistorial();
}

public function listarReserva(){
    return $this->dreserva->Mostrar();
}

}
