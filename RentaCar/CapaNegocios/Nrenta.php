<?php
include_once('../../CapaDatos/Drenta.php');
class Nrenta
{
    private $dauto;
    public function __construct()
    {
        $this->dauto=new Drenta();

    }

    public function ListarPortada($id){
        return $this->dauto->portada($id);
    }

    public function ListaImages($id){
        return $this->dauto->images($id);
    }
}
?>