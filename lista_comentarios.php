<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
//esta pagina solo redirecciona a abrir el archivo de comentarios.txt
$archivo=fopen('comentarios.txt','r');
echo fread($archivo,5000);
fclose($archivo);


?>


</body>
</html>