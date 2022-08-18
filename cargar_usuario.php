
<?php
$nombre_per=$_POST['nombre'];
$apellido_per=$_POST['apellido'];
$mensaje_per=$_POST['mensaje'];
$DNI_per=$_POST['DNI'];
//$imagen_per=$_POST['imagen'];
$estado=$_POST['estado'];

//manejo de imagenes
$nombre_img=$_FILES['imagen']['name'];
$tam_img=$_FILES['imagen']['size'];
$tipo_img=$_FILES['imagen']['type'];
$tmp_img=$_FILES['imagen']['tmp_name'];

?>



<?php
//la carpeta destino

$destino='imagenes/'.$nombre_img;

//guardar las imagenes segun sus propiedades, si todas estan bien la guarda

if(($tipo_img != 'image/jpeg' && 
$tipo_img !='image/png'&&
 $tipo_img !='image/jpg'&&
 $tipo_img !='image/gif' ) or
 $tam_img>2000000){
    header("Location:carga.php?errorimg");
 }else{
    move_uploaded_file($tmp_img,$destino);
//Consulta a la tabla (insert)
$conexionBD=mysqli_connect('localhost',"root","","phpintermedio") or exit ("No se puede conectar con la BD");
mysqli_query($conexionBD, "INSERT INTO usuariospagina VALUES ('default','$nombre_per','$apellido_per','$DNI_per','$estado','$mensaje_per','$nombre_img')");
header("Location:carga.php?ok");
 }



?>