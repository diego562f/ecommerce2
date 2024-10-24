<?php
session_start();

// Verificar si la sesión está iniciada
$nombreUsuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : "Invitado";

include("conexion_emplea.php");
$con = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);

$sql1 = "SELECT * FROM envios";
$query1 = mysqli_query($con, $sql1);

$sql2 = "SELECT * FROM productos";
$query2 = mysqli_query($con, $sql2);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="empleadosDise.css" rel="stylesheet">
    <!-- Bootstrap JS (bundle incluye Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    /* Reset de estilos para asegurar consistencia en todos los navegadores */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Estilo del cuerpo */
body {
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
    padding: 0 20px;

}

/* Encabezado y navegación */
header {
    background-color: #333;
    color: #fff;
    padding: 15px 0;
    margin-bottom: 20px;
}

nav ul {
    list-style: none;
    text-align: center;
}

nav ul li {
    display: inline;
    margin-right: 15px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    padding: 5px 10px;
    transition: background-color 0.3s;
}

nav ul li a:hover {
    background-color: #555;
    border-radius: 5px;
}

/* Secciones del sitio */
section {
    margin-bottom: 40px;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
}

/* Títulos de las secciones */
section h2, section h3 {
    color: #333;
    margin-bottom: 20px;
    text-align: center;
    font-weight: normal;
}

/* Categorías */
#categorias ul {
    list-style: none;
    padding: 0;
    text-align: center;
}

#categorias ul li {
    display: inline-block;
    margin: 0 10px;
}

#categorias ul li a {
    color: #333;
    text-decoration: none;
    font-weight: bold;
    padding: 5px 10px;
    transition: color 0.3s, background-color 0.3s;
}

#categorias ul li a:hover {
    color: #fff;
    background-color: #333;
    border-radius: 5px;
}

/* Estilos para productos */
#productos div {
    margin-bottom: 30px;
}

#productos div h3 {
    font-size: 18px;
    margin-bottom: 10px;
    text-align: center;
}

/* Sección de comentarios y favoritos */
#comentarios, #favoritos {
    margin-bottom: 30px;
}

/* Carrito de compras */
#carrito {
    margin-bottom: 30px;
}

/* Secciones de despachos y devoluciones */
#despachos, #devoluciones {
    margin-bottom: 30px;
}

/* Pie de página */
footer {
    text-align: center;
    padding: 20px;
    background-color: #333;
    color: #fff;
    margin-top: 20px;
    position: relative;
    bottom: 0;
    width: 100%;
}


img {
    max-width: 60%;
    height: auto;
    margin: 20px auto;
}

p{
    width: 50%;
    height: auto;
    margin: 4px;
    text-align: left;
}

h6{
    text-align: center;
}
form{
    text-align: center;
}

.container {
    width: 450px;
    margin: 250px auto;
    background-color: #b8be5ace;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.table-container {
  display: flex;
  justify-content: space-between; /* Ajusta el espaciado entre tablas */
  gap: 20px; /* Añade espacio entre tablas */
}

.metodos_emple {
  flex: 1; /* Permite que las secciones ocupen el espacio disponible */
}

/* Media query para pantallas pequeñas */
@media (max-width: 768px) {
  .table-container {
    flex-direction: column; /* Apila las tablas en pantallas pequeñas */
  }
}




    </style>
<body>
    <!-- Encabezado -->
    <header>
        <nav>
           <ul>
                <li>  
                    <div class="caja">
                        <?php echo 'Administrador  '.$nombreUsuario; ?>
                    </div>
               </li>
           </ul>
            <ul>
                <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>


    <!-- Sección de Inicio -->
    <section id="inicio">
        <h2>Bienvenido a Administrador</h2>
        <p>Aqui podra administrar todo lo que se requiera modificar dentro de la pagina.</p>
    </section>

    <!-- Sección de Categorías -->
    <section id="categorias">
        <h3>Modificaciones</h3>
        <ul>
            <li><a href="#Mostrar_user">Cambiar Cargo</a></li>
            <li><a href="#Mostrar_user">Eliminar Usuario</a></li>
            <li><a href="#Mostrar_user">Mostrar Usuarios</a></li>
            <li><a href="#crear_user">Crear un Usuario</a></li>

            <li><a href="#crear_envio">Crear Envio</a></li>
            <li><a href="#crear_envio">Cancelar Envio</a></li>
            <li><a href="#crear_envio">Modificar Envio</a></li>

            <li><a href="#modificar_stock">Modificar Stock</a></li>
            <li><a href="#crear_stock">Agregar Stock</a></li>
        </ul>
    </section>
    <section class="metodos_emple">
            <h3>Crear un Usuario</h3>
            <div id="crear_user">
          <div class="users-form">
              <form action="crearUsuarios.php" method="POST">
                   <input type="text" name="usuario" placeholder="usuario">
                   <input type="password" name="clave" placeholder="clave">
                   <select name="id_cargo">
                        <option value="3">Seleccione el Cargo</option>
                        <option value="1">Administrador</option>
                        <option value="2">Cliente</option>
                    </select> 
                   <input type="email" name="correo" placeholder="correo">
                   <input type="submit" value="Agregar">
              </form>
          </div>
    </section>
    <section class="metodos_emple">
            <h3>Usuarios registrados</h3>
            <div id="Mostrar_user">
            <div class="users-table">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Clave</th>
                    <th>Id Cargo</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['usuario'] ?></th>
                        <th><?= $row['clave'] ?></th>
                        <th><?= $row['id_cargo'] ?></th>
                        <th><?= $row['correo'] ?></th>
                        <th><a href="modificar2.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="eliminar.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    </section>

    <section class="metodos_emple">
            <h3>Registrar un envio</h3>
            <div id="crear_env">
          <div class="users-form">
              <form action="agregar_envio.php" method="POST">
                   <input type="text" name="producto" placeholder="ingrese un producto">
                   <input type="text" name="marca" placeholder="ingrese la marca del producto">
                   <input type="text" name="cantidad" placeholder="ingrese la cantidad">
                   <input type="text" name="direccion" placeholder="ingrese la direccion">
                   <input type="date" name="fecha_envio" placeholder="ingrese la fecha de envio">

                   <input type="submit" value="Agregar">
              </form>
          </div>
    </section>

    <section class="metodos_emple">
    <h3>Registro de envios</h3>
            <div id="crear_envio">
            <div class="users-table">
        <table>
            <thead>
                <tr>
                    <th>ID_Producto</th>
                    <th>Producto</th>
                    <th>Marca</th>
                    <th>Cantidad</th>
                    <th>Direccion</th>
                    <th>Fecha</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query1)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['producto'] ?></th>
                        <th><?= $row['marca'] ?></th>
                        <th><?= $row['cantidad'] ?></th>
                        <th><?= $row['direccion'] ?></th>
                        <th><?= $row['fecha_envio'] ?></th>
                        <th><a href="modificarEnv.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="eliminar_Env.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    </section>

    <section class="metodos_emple">
            <h3>Administrar Stock</h3>
            <div id="crear_stock">
          <div class="users-form">
              <form action="agregar_stock.php" method="POST">
                   <input type="text" name="producto" placeholder="ingrese un producto">
                   <input type="text" name="marca" placeholder="ingrese la marca del producto">
                   <input type="text" name="cantidad" placeholder="ingrese la cantidad">
                   <input type="text" name="descripcion" placeholder="ingrese la descripcion">
                   <input type="text" name="categoria" placeholder="ingrese la categoria">

                   <input type="submit" value="Agregar">
              </form>
          </div>
    </section>

    <section class="metodos_emple">
    <h3>Modificar Stock</h3>
            <div id="modificar_stock">
            <div class="users-table">
        <table>
            <thead>
                <tr>
                    <th>ID_Producto</th>
                    <th>Producto</th>
                    <th>Marca</th>
                    <th>Cantidad</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query2)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['producto'] ?></th>
                        <th><?= $row['marca'] ?></th>
                        <th><?= $row['cantidad'] ?></th>
                        <th><?= $row['descripcion'] ?></th>
                        <th><?= $row['categoria'] ?></th>
                        <th><a href="administrarStock.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="eliminarStock.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    </section>
    <footer>
        <p>&copy; 2024 E-commerce de diego y cristopher.</p>
    </footer>

</body>
</html>