<?php
session_start();
include("conexion_emplea.php");
$con = connection();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="empleadosDise.css" rel="stylesheet">
</head>

<body>

    <section class="metodos_emple">
            <h3>Registro</h3>
          <div class="users-form">
              <form action="registro_inicio.php" method="POST">
                   <input type="text" name="usuario" placeholder="cree su usuario">
                   <input type="password" name="clave" placeholder="cree una clave">
                   <select name="id_cargo">
                        <option value="3">Seleccione un Cargo</option>
                        <option value="1">Administrador</option>
                        <option value="2">Cliente</option>
                    </select> 
                   <input type="email" name="correo" placeholder="Ingrese un correo">
                   <input type="submit" value="Agregar">
                   <p><a href="inicio_de_secion.php" class="btn-back">Volver a Iniciar Sesión</a></p>
                   <p><a href="index.php" class="btn-back">Volver a la pagiana principal</a></p>
              </form>
          </div>
    </section>
</body>
</html>
