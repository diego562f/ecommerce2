<?php 
    include("conexion_emplea.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM envios WHERE id='$id'";
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
        <h3>Actualizar datos de envio de productos</h3>
            <form action="modificarEnvios.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="producto" placeholder="producto" value="<?= $row['producto']?>">
                <input type="text" name="marca" placeholder="marca" value="<?= $row['marca']?>">
                <input type="text" name="cantidad" placeholder="cantidad" value="<?= $row['cantidad']?>">
                <input type="text" name="direccion" placeholder="direccion" value="<?= $row['direccion']?>">
                <input type="text" name="fecha_envio" placeholder="fecha_envio" value="<?= $row['fecha_envio']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>

