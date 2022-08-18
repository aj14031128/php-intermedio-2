<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de administracion Altamirano</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<?php


session_start();
if(isset($_SESSION['admin'])){

include('header.php');
?>


<h3><?php echo "Bienvenido! Aqui podras crear tu pedido de compras"?></h3>


<section class="form">
        <form action="cargar_usuario.php" method="post" class="formulario" enctype="multipart/form-data">
        <input type="text" name="nombre" required placeholder="Nombre del producto">
        <input type="text" name="apellido" required placeholder="Marca">
        <input type="text" name="DNI" required placeholder="Codigo de producto">
       
    
        <input type="file" name="imagen" required placeholder="Imagen">
        
        <select name="estado" id="">
            <div class="opciones">
<option value="proceso">En proceso</option>
<option value="finalizado">Finalizado</option>
            </div>
        </select>

        <input type="text" name="mensaje" placeholder="Comentarios" pla id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Cargar al pedido">

        </form>

<?php
    }else{
        header("Location:index.php");

    }

        ?>


<h5>
<?php
 if(isset($_GET['errorimg'])){
 echo('Imagen incorrecta. Verifique formato y el peso (max 2000kb)');
}
?>
</h5>



</section>
</body>