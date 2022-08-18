<?php

include("conexion.php");
$id_usuario=$_GET['id'];

mysqli_query($conexionBD,"DELETE FROM usuariospagina WHERE id=$id_usuario");
header('Location:ver.php');


?>