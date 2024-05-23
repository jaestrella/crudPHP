<?php
include("conexionProductos.php");

$con=connection();
$sql="Select * from producto";
$query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Productos CRUD</title>   
</head>
<body>
    <div class="users-form">
        <form action="insertarProducto.php" method="POST">
            <h1>Producto Nuevo</h1>
            <input type="text" name="descripcion" placeholder="descripcion">
            <input type="text" name="precio" placeholder="precio">
            <input type="text" name="stock" placeholder="stock">
            <input type="submit" value="Nuevo Producto">
        </form>    
    </div>
    <div class="users-table">
        <h2>Productos almacenados</h2>
        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row=mysqli_fetch_array($query)):?>
                <tr>
                    <th><?=$row["cod_producto"]?></th>
                    <th><?=$row["descripcion"]?></th>
                    <th><?=$row["precio"]?>€</th>
                    <th><?=$row["stock"]?></th>
                    <th><a href="updateProducto.php?cod_producto=<?= $row['cod_producto'] ?>" class="users-table--edit">Editar</th>
                    <th><a href="deleteProducto.php?cod_producto=<?= $row['cod_producto'] ?>" class="users-table--delete">Eliminar</th>                    
                </tr>
                <?php endwhile; ?>               
            </tbody>
        </table>
    </div>
</body>
</html>