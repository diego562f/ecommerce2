<?php

include("conexion_emplea.php");
$con = connection();

$id=$_POST["id"];
$producto = $_POST['producto'];
$marca = $_POST['marca'];
$cantidad = $_POST['cantidad'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];

$sql="UPDATE productos SET producto ='$producto', marca ='$marca', cantidad ='$cantidad', descripcion='$descripcion', categoria='$categoria' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: empleados.php");
}else{

}

?>