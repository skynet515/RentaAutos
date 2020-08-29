<?php
include_once('../../../CapaDatos/DReservaAd.php');
class NReservaAd
{
    private $dRes;
    public function __construct()
    {
        $this->dRes = new DReservaAd();
    }

    public function Mostrar()
    {
        return $this->dRes->MostrarAutos();
    }


    public function Activar($id, $est)
    {
        $lista = array('estado' => $est, 'id' => $id);
        $req = $this->dRes->ActivarAuto($lista);
        if ($req) {
?>
            <script>
                alert("Reserva modificada con éxito");
                document.location.href = "historial.php";
            </script>
<?php
        }else{
            ?>
             <script>
                alert("Reserva modificada con éxito");
                document.location.href = "historial.php";
            </script>
<?php
        }
    }
}
?>