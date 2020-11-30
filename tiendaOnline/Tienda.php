<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<script type="text/javascript" src="carrito.js"></script>
	<link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="arth.css">
   
	<title>Tienda</title>
</head>
<body>
       <form action="ticket.php" method="GET" target="_blank" name="tienda">
               
       
	 
          
            <div class="mark">
            <div class="form-group">
            <div class="container">
				    <h1 class="display-2">Tienda de computadoras</h1>
				    <label class="label">Cantidad:</label>
				    <input type="number"class="form-control" name="cantidad1" id="cantidad1" class="input" min="1" max="10">
          	<br>
    
                <div class="container">
                <div class="form-group">
				<label class="label">Productos:</label>
        <br>
					<select class="btn btn-secondary dropdown-toggle" name="producto1" id="producto1">
                        <option>Selecciona un producto</option>
                        <option value="9999">Computadora All in One Hp 290-A006BLA $9,999</option>
                        <option value="17000">Computadora All in One Lenovo A540 $17,000</option>
                        <option value="19999">Computadora All in One Hp Pavilion 24-R019LA $19,999</option>
                        <option value="10000">Computadora All in One Hp Pavilion 22-B402LA  $10,000</option>
                        <option value="20800">Computadora All in One Lenovo IdeaCentre A540 $20,800</option>
                        <option value="48999">iMac Apple MMQA2E $48,999</option>
                        <option value="11190">Monitor Gamer Dell Alienware AW2518H $11,190</option>
                        <option value="3000">Monitor Gamer LG 24MK430H-B $3,000</option>
                    </select>
				</div>
         <input type="button" id="insert" class="btn btn-outline-dark" onclick="agregar()"  value="Insertar">       
	
        <div class="control">
          <br>
        <p class="help">Para nueva compra da click en el siguiente boton:</p>
        <input type="button" id ="compra" class="btn btn-outline-dark" onclick="nueva1()" value="Nueva compra">
        <div class="form-group">
          <br>
				<label class="label">Carrito de compras</label>
        <br>
				<textarea class="form-control"  name="carritocompras1" id="carritocompras1"></textarea>
        </div>
        <br>
        <div class="form-group">
				<label class="label">Total</label>
				<input type="number" name="total1" id="total1" class="campodeshabilitado" value="0" readonly>
        </div>
        
        <div class="form-group">
        <label class="label">Cobrar:</label>
          <input type="number"class="form-control" name="pago1" id="pago1" class="input" min="1">
          <button type="submit" class="btn btn-outline-dark">Ticket de compra</button>

        
			</div>
		</div>
	</div>
</body>
</html>