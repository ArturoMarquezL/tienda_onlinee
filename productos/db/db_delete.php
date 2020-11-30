<?php
    $id_productos= $_GET["id_productos"];

    $db = new SQLite3("../../tienda.db");

    $db->exec("DELETE FROM PRODUCTO where id_productos='$id_productos';");

    header("Location: ../index.php");
?>