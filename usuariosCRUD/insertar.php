<?php
include('conexion.php');

$con=connection();

$id=null;
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$email=$_POST['email'];

$sql="INSERT INTO usuarios VALUES ('$id','$nombre','$apellidos','$usuario','$password','$email')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location:usuarios.php");
};

?>