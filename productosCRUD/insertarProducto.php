<?php
include('conexionProductos.php');

$con=connection();

$cod_producto=null;
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];

$sql="INSERT INTO producto VALUES ('$cod_producto','$descripcion',$precio,$stock)";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location:productos.php");
};

?>