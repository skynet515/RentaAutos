<?php
include_once('Mail-Contacto.php');
$nombre = $_POST['txtNombre'];
$correo = $_POST['txtEmail'];
$mensaje = $_POST['txtMensaje'];

if (isset($_POST['txtNombre']) && isset($_POST['txtEmail']) && isset($_POST['txtMensaje'])) {
    $lista = array('nombre' => $nombre, 'correo' => $correo, 'mensaje' => $mensaje);
    $req = email($lista);

    if ($req) {
?>
        <script>
            alert("Gracias por tu comentario");
            document.location.href = "/RentaCar/CapaVista/ReservacionesRentaCar/contacto.php";
        </script>
<?php
    }
}
