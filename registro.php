<?php
//index.php
include 'connect.php';
include 'header.php';


$direccion =$_POST["direccion"];
$precio = $_POST["precio"];
$ciudad = $_POST["ciudad"];
$provincia = $_POST["provincia"];
$categoria = $_POST["categoria"];
if(isset($_POST))
{
$insert = "INSERT INTO piezas (direccion,precio,ciudad,provincia,categoria) 
VALUES('$direccion','$precio','$ciudad','$provincia','$categoria')";}

mysql_query($insert);



mysql_close($conexion);
include 'footer.php';
?>