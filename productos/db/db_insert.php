<?php
    $producto = $_GET['producto'];
    $precio = $_GET['precio'];
    $existencias= $_GET['existencias'];
    $db = new SQLite3('../../tienda.db');

    $db->exec("INSERT INTO PRODUCTOS (producto,precio,existencias) VALUES ('$producto', '$precio','$existencias');");
    
    header("Location: ../index.php");

?>