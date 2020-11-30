<?php

    $id_productos = $_GET["id_productos"];

    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * from PRODUCTOS where id_productos='$id_prodcutos';");

    while ($row = $resultado->fetchArray()) {
        $id_productos = $row["id_productos"];
        $producto = $row["producto"];
        $Precio = $row["Precio"];
        $existencias = $row["existencias"];
    }

    $form = "
        <div class='form-group'>
            <label for='id_productos'>id_productos</label>
            <input type='text' readonly class='form-control' id='id_productos' nombre='id_productos' aria-describedby='id_productos' value='$id_productos'>
        </div>
        <div class='form-group'>
            <label for='producto'>producto</label>
            <input type='text' class='form-control' id='producto' name='producto' aria-describedby='producto' value='$producto'>
        </div>
        <div class='form-group'>
            <label for='Precio'>Precio</label>
            <input type='text' class='form-control' id='Precio' name='Precio' aria-describedby='Precio' value='$Precio'>
        </div>
        <div class='form-group'>
            <label for='existencias'>existencias</label>
            <input type='text' class='form-control' id='existencias' name='existencias' aria-describedby='existencias' value='$existencias'>
        </div>
        ";

    print($form);
?>