<?php
include('conexionProductos.php');
$con=connection();

$cod_producto=$_GET['cod_producto'];

$sql="SELECT * from producto where cod_producto='$cod_producto'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Actualizar producto</title>
</head>
<body>
    <div class="users-form">
        <form action="editarProducto.php" method="POST">
            <h1>Actualizar producto</h1>
            <input type="hidden" name="cod_producto" value="<?= $row['cod_producto'] ?>">
            <input type="text" name="descripcion" value="<?= $row['descripcion'] ?>">
            <input type="text" name="precio" value="<?= $row['precio'] ?>">
            <input type="text" name="stock" value="<?= $row['stock'] ?>">
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>