<?php
include 'conexion.php';
if(!$miconexion){
    die("Error: ".mysqli_connect_error());
}
$usuario= $_POST["user"];
$password= $_POST["password"];
$query ="SELECT * FROM administrador WHERE correo='".$usuario."' AND password='".$password."'";
$sql=mysqli_query($miconexion, $query);
$numrows=mysqli_num_rows($sql);
if($numrows>0){

    while($filas=$sql->fetch_assoc()){
        if($filas['idrol']=='1'){
            session_start();
            $_SESSION['user_id']=$filas['idrol'];
            header("location: vertical-dark/dist/index.php");
        }
           
    }
}else{
    Header("Location:vertical-dark/dist/login.php?null=yes");
}

?>