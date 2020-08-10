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

    public function registrarRenta($id, $precio)
    {

        if (
            isset($_POST['nombre']) &&
            isset($_POST['tel']) &&
            isset($_POST['pais'])  &&
            isset($_POST['correo']) &&
            isset($_POST['h_recogida']) &&
            isset($_POST['d_entrega']) &&
            isset($_POST['f_entrega']) &&
            isset($_POST['f_recogida']) &&
            isset($_POST['d_recogida']) &&
            isset($_POST['h_entrega'])
        ) {
            if (
                !empty($_POST['nombre']) &&
                !empty($_POST['tel']) &&
                !empty($_POST['pais'])  &&
                !empty($_POST['correo']) &&
                !empty($_POST['h_recogida']) &&
                !empty($_POST['d_entrega']) &&
                !empty($_POST['f_entrega']) &&
                !empty($_POST['f_recogida']) &&
                !empty($_POST['d_recogida']) &&
                !empty($_POST['h_entrega'])
            ) {
                $date1 = new DateTime($_POST['f_entrega']);
                $date2 = new DateTime($_POST['f_recogida']);
                $cant_dia = $date1->diff($date2);
                $total = ($cant_dia->days) * $precio;
                $lista = array(
                    'id' => $id,
                    'precio' => $precio,
                    'nombre' => $_POST['nombre'],
                    'tel' => $_POST['tel'],
                    'pais' => $_POST['pais'],
                    'correo' => $_POST['correo'],
                    'cant_dia' => $cant_dia->days,
                    'total' => $total,
                    'd_recogida' => $_POST['d_recogida'],
                    'f_recogida' => $_POST['f_recogida'],
                    'h_recogida' => $_POST['h_recogida'],
                    'd_entrega' => $_POST['d_entrega'],
                    'f_entrega' => $_POST['f_entrega'],
                    'h_entrega' => $_POST['h_entrega']
                );
                $request = $this->dauto->registrarRenta($lista, "reserva");

                if ($request) {
                    include('modals/success.php');
                } else {
                    include('modals/error.php');
                }
            } else {
                include('modals/warning.php');
            }
        }
    }
}
