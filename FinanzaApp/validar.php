<?php

$CORREO=$_POST['correo'];
$PASSWORD=$_POST['contraseña'];


$conexion=mysqli_connect("localhost","root","","administrador");
$consulta = "SELECT * FROM admin WHERE correo ='$CORREO' and contraseña = '$PASSWORD'";
$resultado  = mysqli_query($conexion, $consulta); 

$filas = mysqli_num_rows($resultado);

if($filas>0){
    sleep(1);
    header("location: principal.php");

}else
{
    echo "Error de autentifiaciòn";
    header("location index.html");
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>



