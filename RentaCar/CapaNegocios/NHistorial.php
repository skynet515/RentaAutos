<?php
include_once('../../../CapaDatos/DHistorial.php');
class NHistorial
{
    private $dreserva;

    public function __construct()
    {
        $this->dreserva = new DHistorial();
    }
    public function contar()
    {
        return $this->dreserva->count();
    }


    public function listarReserva($desde, $numXpagina)
    {
        return $this->dreserva->Mostrar($desde, $numXpagina);
    }
}
