<?php



/**
 * Nota: Es recomendable guardar la fecha en formato año - mes y dia (2022-08-25)
 * No es tan importante que el tipo de fecha sea date, puede ser varchar
 * La funcion strtotime:sirve para cambiar el forma a una fecha,
 * esta espera que se proporcione una cadena que contenga un formato de fecha en Inglés US,
 * es decir año-mes-dia e intentará convertir ese formato a una fecha Unix dia - mes - año.
*/
$conexion=mysqli_connect("localhost","root","","administrador");
$fechaInit = date("Y-m-d", strtotime($_POST['f_ingreso']));
$fechaFin  = date("Y-m-d", strtotime($_POST['f_fin']));

$sqlTrabajadores = ("SELECT * FROM movimientos WHERE  `fecha_ingreso` BETWEEN '$fechaInit' AND '$fechaFin'  ORDER BY fecha_ingreso ASC");
$query = mysqli_query($conexion, $sqlTrabajadores);
//print_r($sqlTrabajadores);
$total   = mysqli_num_rows($query);
echo '<strong>Total: </strong> ('. $total .')';
?>

<table class="table table-hover">
    <thead>
        <tr>
                  <th scope="col">#</th>
                  <th scope="col">Concepto</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Subcategoria</th>
                  <th scope="col">Fecha de ingreso</th>
        </tr>
    </thead>
    <?php
    $i = 1;
    while ($dataRow = mysqli_fetch_array($query)) { ?>
        <tbody>
            <tr>
            <td><?php echo $i++; ?></td>
                  <td><?php echo $dataRow['Concepto'] ; ?></td>
                  <td><?php echo '$ '. $dataRow['Cantidad'] ; ?></td>
                  <td><?php echo $dataRow['Categoria'] ; ?></td>
                  <td><?php echo $dataRow['Subcategoria'] ; ?></td>
                  <td><?php echo $dataRow['Fecha_ingreso'] ; ?></td>
            </tr>
        </tbody>
    <?php } ?>
</table>