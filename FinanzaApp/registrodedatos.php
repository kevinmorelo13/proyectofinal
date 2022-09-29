

<?php

date_default_timezone_set('America/Bogota');

$CONCEPTO=$_POST['concepto'];
$CANTIDAD=$_POST['cantidad'];
$CATEGORIA=$_POST['categoria'];
$SUBCATEGORIA=$_POST['subcategoria'];
$FECHAREGISTRO = date("y/m/d");

$conexion=mysqli_connect("localhost","root","","administrador");
$insertar = "INSERT INTO `movimientos`(Concepto, Cantidad, Categoria, Subcategoria, fecha_ingreso) VALUES ('$CONCEPTO','$CANTIDAD','$CATEGORIA','$SUBCATEGORIA','$FECHAREGISTRO')";
//ejecutar consulta
$resultado  = mysqli_query($conexion, $insertar); 





if(!$resultado){
    echo 'Error al registrar';

}else{  
    sleep(1);
    
    header("location: principal.php");
    
   
    //echo 'Se ha registrado correctamente';
    
}

mysqli_close($conexion);

?>
