<?php
include_once('../../CapaDatos/Drenta.php');
class Nrenta
{
    private $dauto;
    public function __construct()
    {
        $this->dauto = new Drenta();
    }

    public function ListarPortada($id)
    {
        return $this->dauto->portada($id);
    }

    public function ListaImages($id)
    {
        return $this->dauto->images($id);
    }

    public function registrarRenta($id)
    {
        if (
            isset($_POST['f_recogida']) &&
            isset($_POST['h_recogida']) &&
            isset($_POST['d_entrega']) &&
            isset($_POST['f_entrega']) &&
            isset($_POST['d_recogida']) &&
            isset($_POST['h_entrega'])
        ) {
            $lista = array(
                'id' => $id,
                'd_recogida' => $_POST['d_recogida'],
                'f_recogida' => $_POST['f_entrega'],
                'h_recogida' => $_POST['h_recogida'],
                'd_entrega' => $_POST['d_entrega'],
                'f_entrega' => $_POST['f_entrega'],
                'h_entrega' => $_POST['h_entrega']
            );
            $request = $this->dauto->registrarRenta($lista, "reserva");

            if ($request) {
                return $request;
            } else { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error, no se Registró el Usuario</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
<?php }
        }
    }
}
