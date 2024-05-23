<?php
include('conexionProductos.php');
$con=connection();

$cod_producto=$_POST['cod_producto'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];

$sql="UPDATE producto set descripcion='$descripcion', precio=$precio, stock=$stock where cod_producto='$cod_producto'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location:productos.php");
};
?>