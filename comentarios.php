<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<?php
include('header.php')
?>
<h2> En esta seccion podras sumar tu comentario, con tus sugerencias de mejora!</h2>
<section class="form">
        <form action="vercomentario.php" method="post" class="formulario">
        <input type="text" name="nombre" required placeholder="Nombre">
        <input type="text" name="mensaje" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Cargar comentario">
        </form>

    <?php

    if(isset($_GET['ok'])){
echo('Usuario registrado con exito');


    }
    ?>


</section>
</body>
</html>



