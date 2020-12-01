<?php
    $db = new SQLite3("../tienda.db");
    $resultado = $db->query("SELECT * from TICKETS;");
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="bootstrap.min.css">   
	<title>Tienda</title>


</head>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="cool">ID ticket</th>
      <th scope="col">Fecha y hora</th>
      <th scope="col">Cantidad de productos vendidos</th>
      <th scope="col">Nombre de producto</th>
      <th scope="col">Total de productos</th>
    </tr>
  </thead>
  <tbody>
                     <?php 
                        
                        while ($row = $resultado->fetchArray())
                        {
                            
                        
                            {
                    ?>
                                <tr>
                                    <td><?php echo $row['id_ticket']?></td>
                                    <td><?php echo $row['fecha_hora']?></td>
                                    <td><?php echo $row['cantidad_producto']?></td>
                                    <td><?php echo $row['producto']?></td>
                                    <td><?php echo $row['total_producto']?></td>
                                    
                                   
                                </tr> 
                     
		           
                    <?php
                            }
                        }
                       
                    ?> 
    </tbody>
</table>
</div>
</html>