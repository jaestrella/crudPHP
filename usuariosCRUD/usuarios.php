<?php
include("conexion.php");

$con=connection();
$sql="Select * from usuarios";
$query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Usuarios CRUD</title>   
</head>
<body>
    <div class="users-form">
        <form action="insertar.php" method="POST">
            <h1>Crear usuario</h1>
            <input type="text" name="nombre" placeholder="nombre">
            <input type="text" name="apellidos" placeholder="apellidos">
            <input type="text" name="usuario" placeholder="usuario">
            <input type="text" name="password" placeholder="password">
            <input type="text" name="email" placeholder="email">
            <input type="submit" value="agregar usuario">
        </form>    
    </div>
    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nombre</th>
                    <th>apellidos</th>
                    <th>usuario</th>
                    <th>password</th>
                    <th>email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row=mysqli_fetch_array($query)):?>
                <tr>
                    <th><?=$row["id"]?></th>
                    <th><?=$row["nombre"]?></th>
                    <th><?=$row["apellidos"]?></th>
                    <th><?=$row["usuario"]?></th>
                    <th><?=$row["password"]?></th>
                    <th><?=$row["email"]?></th>
                    <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</th>
                    <th><a href="delete.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</th>                    
                </tr>
                <?php endwhile; ?>               
            </tbody>
        </table>
    </div>
</body>
</html>