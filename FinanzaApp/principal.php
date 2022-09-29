<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    
    
    <title>FinanzaApp</title>
    
</head>
<body>
    <nav class="navbar">
        <div class="logo"><img src="./Imagenes/Diseño_sin_título-removebg-preview.png" alt="logo" width="150px"></div>
        
        <div class="regis"><script src="./redirection.js"></script></div>
    </nav>
    
    <section class="movimiento">
        <div class="movimiento__titulo"><h2>Movimiento</h2></div>
        <div class="movimiento__input">          
               <button type="button" class="movimiento_ingreso" onclick="redireccioningreso()"> + Ingreso</button >
               <button type="button" class="movimiento_gasto" onclick="redirecciongasto()"> - Gasto</button>
        </div>
       
    </section>
    <section class="Filtro"> 
        <h5 class="filtro_text">Filtra tus movimientos por fecha y Concepto </h5>       
        <form action="filtro.php" method='post'>   
      <section class='filtro_date'>
        <input type="date" class='fechas' name='fecha_inicio'>
        <input type="date" class='fechas' name='fecha_fin'>
        <button type='type="submit"' >FILTRAR</button>
      </section>
      </form>
      </section>
      
      <section >            
          <div class="table_responsive_resultadoFiltro">
            <table class="table_table_hover" id="tableEmpleados">
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
            include('registro.php');
            $sqlTrabajadores = ('SELECT * FROM movimientos ORDER BY fecha_ingreso ASC');
            $query = mysqli_query($conexion, $sqlTrabajadores);
            $i =1;
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
          </div>

          </div>
        </div>
    </section>

   
</body>
</html>