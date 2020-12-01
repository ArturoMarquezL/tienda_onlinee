<?php
  $carritocompras= $_GET['carritocompras1'];
  $total= $_GET['total1'];
  $pago= $_GET['pago1'];
  $cambio= $pago - $total;
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

