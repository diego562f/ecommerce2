<?php 
    include("conexion_emplea.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM productos WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="empleadosDise.css" rel="stylesheet">
        <title>Modificar envios</title>
        
    </head>
    <body>
        <div class="users-form">
        <h3>Actualizar Stock de Productos</h3>
            <form action="modificarStock.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="producto" placeholder="producto" value="<?= $row['producto']?>">
                <input type="text" name="marca" placeholder="marca" value="<?= $row['marca']?>">
                <input type="text" name="cantidad" placeholder="cantidad" value="<?= $row['cantidad']?>">
                <input type="text" name="descripcion" placeholder="descripcion" value="<?= $row['descripcion']?>">
                <input type="text" name="categoria" placeholder="categoria" value="<?= $row['categoria']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>

