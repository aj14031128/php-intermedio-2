<?php
//Este archivo sirve para modificar la base de datos, y cambiar el status de en proceso a finalizado

//conecto con BD

include("conexion.php");

//recuperamos el id

$id_usuario=$_GET['id'];

//consulta

mysqli_query($conexionBD,"UPDATE usuariospagina SET estado='finalizado' WHERE id=$id_usuario");

header("location: ver.php");

