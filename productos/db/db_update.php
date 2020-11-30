<?php

    $id_producto = $_GET['id_producto'];
    $producto = $_GET['producto'];
    $precio = $_GET['precio'];
    $existencias = $_GET['existencias'];
    $db = new SQLite3('../../tienda.db');
    $db->exec("UPDATE PRODUCTOS SET precio='$precio', prodcuto='$producto', existencias='$existencias' WHERE id_producto='$id_producto';");
    header("Location: ../index.php");
?>