<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Ejemplo archivos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    

<?php
//datos de la fecha

date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha_actual=date("j/m/Y");
$hora=getdate(time());

//creacion o lectura del archivo

$archivo=fopen('comentarios.txt','a');

//Escribir en un archivo
$texto="<h3> Nombre: ".$_POST['nombre']. "   Comentario: ".$_POST['mensaje']. "  Fecha: " . $fecha_actual . " a las ". $hora['hours'].":".$hora['minutes'].":".$hora['seconds']."</h3>";
fputs($archivo,$texto);
echo "<p> Comentario almacenado!</p>";




?>

<p><a href="lista_comentarios.php">Ver todos los comentarios</a></p>



</body>
</html>