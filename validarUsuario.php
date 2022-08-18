<?php
//Este documento valida si el usuario ingresado es el correcto. Los compara con los valores cargados
//iniciar sesion

session_start();
//recupero los valores dle formulario a traves de post

$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
$codigo_captcha=$_POST['captcha'];

//incluir la conexion 

include('conexion.php');

//consulta en la tabla administradores con los uausior que figuran en index

$consulta=mysqli_query($conexionBD,"SELECT * FROM administradores WHERE usuario=$usuario AND pass=$pass");

//ver si el captcha esta bien. Si esta mal me redirecciona a index, con error

if ($codigo_captcha==$_SESSION['codigo_captcha']){

//ver si el user y pass son correctos
if(($usuario=='20123456') && ($pass=='admin123')){
    $_SESSION['admin']=$_POST['usuario'];
    header("Location:carga.php?usuario=$usuario");
} elseif(($usuario=='20123456') && ($pass=='admin13')){
    $_SESSION['admin']=$_POST['usuario'];
    header("Location:carga.php?usuario=$usuario");
}else{
    header("Location:index.php?error");

}
}else{

    header("Location:index.php?error_captcha");}


// DNI 18123456
//Clave: admin12
//DNI 20123456
//Clave: admin13
//    header("Location:carga.php");

?>