<?php

$NOMBRE=$_POST['Nombre'];
$APELLIDO=$_POST['apellido'];
$CORREO=$_POST['correo'];
$CONTRASEÑA=$_POST['contraseña'];



$conexion=mysqli_connect("localhost","root","","administrador");
$insertar = "INSERT INTO `admin`( Nombre, Apellido, Correo, Contraseña) VALUES ('$NOMBRE','$APELLIDO','$CORREO','$CONTRASEÑA')";
//ejecutar consulta
$resultado  = mysqli_query($conexion, $insertar); 





if(!$resultado){
    echo 'Error al registrar';

}else
{
    sleep(1);
    header("location: index.html");
}

mysqli_close($conexion);

?>
