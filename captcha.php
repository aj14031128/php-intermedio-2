<?php
session_start();
header("Content-type:image/jpeg");

//define tamano de la imagen 

$imagen_captcha=imagecreate(70,30);

//fondo de la imagen para el captcha

$fondo=imagecolorallocate($imagen_captcha,239,192,240);

//color del texto para el catpcha

$texto=imagecolorallocate($imagen_captcha,82,4,34);

//generar un string en la imagen. ademas se genera una sesion con la que se habilitara ese captcha

imagestring($imagen_captcha,5,15,5,$_SESSION['codigo_captcha'],$texto);

imagejpeg($imagen_captcha);
?>
