<?php 
    include("conexion_emplea.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM usuarios WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="empleadosDise.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
        <h3>Actualizar datos de los Usuarios</h3>
            <form action="modificardatos.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="usuario" placeholder="usuario" value="<?= $row['usuario']?>">
                <input type="text" name="clave" placeholder="clave" value="<?= $row['clave']?>">
                <input type="text" name="id_cargo" placeholder="id_cargo" value="<?= $row['id_cargo']?>">
                <input type="text" name="correo" placeholder="correo" value="<?= $row['correo']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>