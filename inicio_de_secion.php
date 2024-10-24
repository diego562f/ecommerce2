<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <style>
        /* Estilo para centrar el contenido en toda la página */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Altura de la ventana de visualización */
            margin: 0;
            background-color: #f4f4f4;
        }

        /* Estilo para la sección de Iniciar Sesión */
        .login-section {
            max-width: 500px; /* Aumenta el ancho máximo a 500px */
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-section h2 {
            margin-bottom: 20px;
            color: #333;
        }

        /* Estilo del formulario */
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        .form-group label {
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
            outline: none;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #333;
        }

        /* Estilo del botón */
        .btn-login, .btn-register {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            text-decoration: none; /* Para enlaces estilo botón */
            display: inline-block; /* Para que el enlace se vea como botón */
            text-align: center;
            margin-top: 10px; /* Espacio entre los botones */
        }

        .btn-login:hover, .btn-register:hover {
            background-color: #555;
        }

        /* Enlace de recuperación de contraseña */
        .login-form p {
            margin-top: 10px;
        }

        .login-form p a {
            color: #333;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .login-form p a:hover {
            color: #555;
        }
    </style>
</head>
<body>
<div class="container">

    <hr>
    <?php
    if (isset($_GET['error'])) {
        ?>
        <p class="error">
           <?php
           echo $_GET['error']
        ?>
      </p>
     <?php
    }
    ?>

    </hr>
    
    <section id="login" class="login-section">
       <form action="inicio.php" method="post">
           <h2>Iniciar Sesión</h2>
            <div class="form-group">
                <label for="usuario">Nombre de Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su nombre" required>
            </div>
            <div class="form-group">
                <label for="clave">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="clave" placeholder="Ingrese su clave" required>
            </div>
            <input type="submit" class="btn-login" value="Ingresar">
        </form>
        <p><a href="registro.php">Regístrate</a></p>
        
    </section>
</div>
</body>
</html>

            