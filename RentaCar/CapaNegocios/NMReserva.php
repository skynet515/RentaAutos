<?php
include_once('../../../CapaDatos/DMReserva.php');
class NMReserva
{
private $dreserva;

public function __construct()
{
    $this->dreserva= new DMReserva();
}

public function listarReserva(){
    return $this->dreserva->Mostrar();
}

}
