<?php
if (isset($_GET['none'])=="yes") { 
    echo "No puedes entrar a la pagina, por favor inicia sesión."; 
}
if (isset($_GET['null'])=="yes") { 
    echo "El nombre de usuario y la contraseña que ingresaste no coinciden con nuestros registros. Por favor, revisa e inténtalo de nuevo."; 
}
?>