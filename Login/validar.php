<?php
$usuario=$_POST['Username'];
$contraseña=$_POST['Contraseña'];
session_start();

$conexion=mysqli_connect("localhost", "u277099965_Beaty", "Beatysalon123", "u277099965_Beatysalon");

$consulta="SELECT*FROM usuario where Username='$usuario' and Contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);
$_SESSION['Username']=$filas['idUsuario'];

if($filas['idRol']==1){ //administrador
    header("location:adminViews/admin.php");
}else
if($filas['idRol']==2){ //subadministrador
header("location:subViews/sub.php");
}else
if($filas['idRol']==3){ //servicios
header("location:serViews/ser.php");
}else
if($filas['idRol']==4){ //ventas
header("location:venViews/ven.php");
}
else{
    header("location:login.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);