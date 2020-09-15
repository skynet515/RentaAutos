<?php
$correo = $_POST['txtEmail'];
$nombre = $_POST['txtNombre'];
$mensaje = $nombre . ' ha enviado:' . $_POST['txtMensaje'];
$asunto = 'Contacto Cabezas Renta Car';
$to = 'temprcar@gmail.com';
$req = mail($to, $asunto, $mensaje);

if ($req) {
?>
    <script>
        alert("Gracias por tu comentario");
        document.location.href = "/RentaCar/CapaVista/ReservacionesRentaCar/contacto.php";
    </script>
<?php
} ?>