<?php
include('conexion.php');
$con=connection();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$email=$_POST['email'];

$sql="UPDATE usuarios set nombre='$nombre', apellidos='$apellidos', usuario='$usuario', password='$password', email='$email' where id='$id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location:usuarios.php");
};
?>