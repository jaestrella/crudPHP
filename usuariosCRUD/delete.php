<?php
include('conexion.php');
$con=connection();

$id=$_GET['id'];

$sql="DELETE from usuarios where id='$id'";

$query=mysqli_query($con, $sql);

if($query){
    Header("Location:usuarios.php");
};   
?>