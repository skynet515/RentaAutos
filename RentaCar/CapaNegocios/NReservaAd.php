<?php
include_once('../../../CapaDatos/DReservaAd.php');
class NReservaAd{
private $dRes;
public function __construct()
{
    $this->dRes=new DReservaAd();
}

public function Mostrar(){
    return $this->dRes->MostrarAutos();
}
  




}
