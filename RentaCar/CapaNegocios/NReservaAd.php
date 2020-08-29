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

    public function Activar($id)
    {
        if (isset($_POST['btnact'])) {
            $req = $this->dRes->ActivarAuto($id);
            if ($req) {
?>
                <script>
                    alert("Automovil reactivado con éxito");
                    document.location.href = "historial.php";
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("Error al reactivar automovil, intentelo nuevamente.");
                </script>
<?php
            }
        }
    }
}
?>