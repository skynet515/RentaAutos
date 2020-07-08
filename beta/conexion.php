<?php
$miconexion=mysqli_connect('den1.mysql1.gear.host', 'bdrentacar', 'car123#', 'bdrentacar');
if($miconexion->connect_error){ 
	echo $conx->connect_error;
}
?>