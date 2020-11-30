<?php

    $id_productos = $_GET['id_productos'];
    $producto = $_GET['producto'];
    $Precio = $_GET['Precio'];
    $existencias = $_GET['existencias'];

    $db = new SQLite3('../../tienda.db');
    $db->exec("UPDATE PRODUCTOS SET producto='$producto', Precio='$Precio', existencias='existencias',  WHERE id_productos='$id_productos';");
    header("Location: ../index.php");

?>