<?php
 $carritocompras= $_GET['carritocompras1'];
  $total= $_GET['total1'];
  $pago= $_GET['pago1'];
  $cambio= $pago - $total;
  $idProductos = isset($_POST['idProductos']) ? $_POST['idProductos'] : '';
  $productoS= $_POST['producto'];
    
    include 'conexion.php';  
    $db = new SQLite3("../tienda.db");
    

    $productos = explode(";",$idProductos);
    foreach ($productos as $producto) {
    $productoYCantidad = explode(":",$carritocompras);
    if(!isset($productoYCantidad[0]) || !isset($productoYCantidad[1])){
        continue;
    }
    $db->exec('UPDATE PRODUCTOS SET existencias= existencias - '.$productoYCantidad[1].' WHERE id_producto="'.$productoYCantidad[0].'"');
    $existencias = $db->query('SELECT  existencias= existencias - '.$productoYCantidad[1].'FROM producto WHERE id_producto="'.$productoYCantidad[0].'"');
    $db->exec("INSERT INTO TICKETS (cantidad_producto,producto,total_producto) VALUES ('$productoYCantidad[1]', '$productoYCantidad[0]', '$existencias');");
   
		
		
}
?>

<!DOCTYPE>
<hmlt>
	<head>
		

  <link rel="stylesheet"  href="bootstrap.min.css"> 
	<meta charsert="utf8_decode(data)">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	</head>
	<body>
		<div class="container">
		<div class="mark">
              <div class="form-group">
				
					<h1 class="display-4">Tienda de computadoras</h1>
          <br>
          <label class="label">
            	<?php
                 echo "Fecha: " . date("d") . "/" . date("m") . "/" . date("y");
              ?>
          </label>
        
          <br>
              <div class="form-group">
          <label class="label">
            <?php
              print("Compras ".$carritocompras);
            ?>
          </label>

          <br>
          <label class="label">
            <?php
              print("total a pagar: $".$total);
            ?>
          </label>

          <br>
          <label class="label">
            <?php
              print("Pago: $".$pago);
            ?>
          </label>

          <br>
          <label class="label">
            <?php
              print("Cambio: $".$cambio);
            ?>
          </label>
			</div>
			</div>
		  </div>
	    </body>
</hmlt>

