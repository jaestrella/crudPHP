<?php
include('conexion.php');
$con=connection();

$id=$_GET['id'];

$sql="SELECT * from usuarios where id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Editar usuarios</title>
</head>
<body>
    <div class="users-form">
        <form action="editar.php" method="POST">
            <h1>Editar usuario</h1>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="nombre" value="<?= $row['nombre'] ?>">
            <input type="text" name="apellidos" value="<?= $row['apellidos'] ?>">
            <input type="text" name="usuario" value="<?= $row['usuario'] ?>">
            <input type="text" name="password" value="<?= $row['password'] ?>">
            <input type="text" name="email" value="<?= $row['email'] ?>">
            <input type="submit" value="Actualizar informacion">
        </form>
    </div>
</body>
</html>