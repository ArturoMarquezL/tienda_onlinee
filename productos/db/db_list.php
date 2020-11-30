<?php
    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * from PRODUCTOS;");

    $table = "
        <table class='table'>
            <thead>
            <tr>
                <th>ID_productos</th>
                <th>productos</th>
                <th>Precio</th>
                <th>existencias</th>
                <th>View</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            ";

    print($table);

    while ($row = $resultado->fetchArray()) {
        //Forma 1 para mostrar datos
        $id_productos = $row['id_productos'];
        $productos = $row['productos'];
        $Precio = $row['Precio'];
        $existencias = $row['existencias'];

        $table = "
            <tr>
                <td>$id_producto</td>
                <td>$producto</td>
                <td>$Precio</td>
                <td>$existencias</td>
                <td><a href='view.php?id_productos=$id_productos'>View</a></td>
                <td><a href='update.php?id_productos=$id_productos'>Update</a></td>
                <td><a href='delete.php?id_productos=$id_productos'>Delete</a></td>
            </tr>
        ";

        print($table);


/*
        //Forma 2 para mostrar los datos
        print("<tr>");
        print("<td>".$row['id_persona']."</td>");
        print("<td>".$row['nombre']."</td>");
        print("<td>".$row['primer_apellido']."</td>");
        print("<td><a href='view.php?id_persona=".$row['id_persona']."'>View</a></td>");
        print("<td><a href='update.php?id_persona=".$row['id_persona']."'>Update</a></td>");
        print("<td><a href='delete.php?id_persona=".$row['id_persona']."'>Delete</a></td>");
        print("</tr>");
        */
    }
 
    print("</table>");
?>