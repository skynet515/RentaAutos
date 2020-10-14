<?php
$correo = $_POST['txtEmail'];
$nombre = $_POST['txtNombre'];
$asunto = 'Contacto Cabezas Renta Car';
$to = 'suport@cabezasrentacar.com';
$uniq = uniqid('np');

$headers = "MIME-Version: 1.0\r\n";
$headers .= "From: $correo \r\n";
$headers .= "Subject: Text mail\r\n";

$mensaje = $correo."\nA enviando: \nHola mi nombre es: ".$nombre.".\n".$_POST['txtMensaje'];
$mensaje .= "\r\n\r\n--" . $uniq . "\r\n";


$headers .= "Content-Type: multipart/alternative;boundary=" . $uniq . "\r\n";
$req = mail($to, $asunto, $mensaje);

if ($req) {
?>
    <script>
        alert("Gracias por tu comentario");
        document.location.href = "https://cabezasrentacar.com/views/re/contacto.php";
    </script>
<?php
} ?>