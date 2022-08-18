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
include('header.php')
?>


<?php
//generar captcha
session_start();

$nro1=rand(0,9);
$nro2=rand(0,9);
$nro3=rand(0,9);
$letra=array('a','s','d','f','g','h','j','k','l','q','w','e');
$simbolo=array('@','#','$','%','^','&');
$mezclar_letra=rand(0,11);//es de 0  11 porque puse 11 letras
$mezclar_simbolo=rand(0,5); // es de 0 a 5 porque hay 6 simbolos
$_SESSION['codigo_captcha']=($nro1.$letra[$mezclar_letra].$nro2.$simbolo[$mezclar_simbolo].$nro3);




?>


<h2>Ingreso al sistema</h2>

<section class="form">
        <form action="validarUsuario.php" method="POST" class="formulario">
        <input type="text" name="usuario" required placeholder="User">
        <input type="password" name="pass" required placeholder="Password">
        <div class="img_captcha"><img src="captcha.php"></div>
        <input type="text" name="captcha" placeholder="Ingrese el texto del captcha">
         <input type="submit" value="Ingresar">
        </form>




<div class="Errores">

    <?php

// DNI 18123456
//Clave: admin12
//DNI 20123456
//Clave: admin13
?>

<h5>
<?php
//error que tira si no coinciden user y pass
    if(isset($_GET['error'])){
echo('Usuario incorrecto');
    }
?>
</h5>

<h5>
<?php
 if(isset($_GET['error_captcha'])){
 echo('Captcha incorrecto');
}
?>
</h5>

<h5>
<?php
    if(isset($_GET['Cierre'])){
        echo('Sesion cerrada');
            }
    ?>
</h5>




</div>



<p>Una ayudita</p>
<p> DNI 20123456</p>
<p> Clave: admin123</p>


</section>
</body>
</html>