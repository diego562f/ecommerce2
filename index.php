<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <!-- este es el link de boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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


    </style>
<body>
    <!-- Encabezado -->
    <header>
        <nav>
            <ul>
                <li><a href="registro.php">Registrarse</a></li>
                <li><a href="#categorias">Categorías</a></li>
                <li><a href="inicio_de_secion.php">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección de Inicio -->
    <section id="inicio">
        <h3>Bienvenido a Nuestro E-commerce</h3>
        <h6>Encuentra todo lo que necesitas en un solo lugar.</h6>
    </section>

    <!-- Sección de Categorías -->
    <section id="categorias">
        <h2>Categorías</h2>
        <ul>
            <li><a href="#herramientas">Herramientas</a></li>
            <li><a href="#muebles">Muebles</a></li>
            <li><a href="#tecnologia">Tecnología</a></li>
            <li><a href="#decoraciones">Decoraciones</a></li>
            <li><a href="#limpieza-hogar">Limpieza y Hogar</a></li>
            <li><a href="#mascotas">Mascotas</a></li>
        </ul>
    </section>

    <!-- Sección de Productos -->
    <section class="productos">
            <h2>Herramientas</h2>
            <div id="herramientas">
            <div class="row">
                <!-- Queso 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="Taladro_Percutor.jpeg" class="card-img-top" alt="taladro percutor">
                        <div class="card-body">
                            <h6 class="card-title">Taladro Percutor Bosch GSB 550 RE 550W7</h6>
                            <p class="card-text">Este Taladro Percutor, cuenta con un potente motor de 550 W, para uso en diferentes materiales y también con su función reversible para uso en aplicación como atornillador.</p>
                            <p class="card-text"><strong>Precio: Por Definir</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Queso 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="Sierracircular.JPEG" class="card-img-top" alt="sierra circular">
                        <div class="card-body">
                            <h6 class="card-title">Sierra circular Makita 1800W</h6>
                            <p class="card-text">Esta sierra cuenta con un potente motor de 8,2 AMP, gran capacidad de corte, bisel cortes de 0° - 56° con topes positivos de 22,5°, 45° y 56° ademas el diámetro de su disco es de 7 1/4 y pesa 5kg.</p>
                            <p class="card-text"><strong>Precio: Por Definir</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Queso 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="Lijadora_Roto_orbital_Stanley.JPEG" class="card-img-top" alt="lijadora stanley">
                        <div class="card-body">
                            <h6 class="card-title">Lijadora Roto-orbital Stanley Ss30-b2c 300w</h6>
                            <p class="card-text">Esta Lijadora cuenta con caracteristicas como la capacidad de regular la velocidad, un motor de 300W, ademas de contar con un recolector de polvo y cuenta con un peso de no mas de 1.5 kg.</p>
                            <p class="card-text"><strong>Precio: Por Definir</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="productos">
            <h2>Muebles</h2>
            <div id="muebles">
            <div class="row">
                <!-- Queso 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="estante_acero.jpeg" class="card-img-top" alt="taladro percutor">
                        <div class="card-body">
                            <h6 class="card-title">Estante Acero Pintado 90x40x180 cm</h6>
                            <p class="card-text">estanteria muy versatil, esta estructurada sobre una base construida con perfiles metalicos ranurados que pueden ser ensamblados sin gran esfuerzo, no requiere de tornillos para ser ensamblado igualmente cuenta con una capacidad de almacenaje de 175 kgs por cada bandeja.</p>
                            <p class="card-text"><strong>Precio: Por Definir</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Queso 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="comedor1.JPG" class="card-img-top" alt="sierra circular">
                        <div class="card-body">
                            <h6 class="card-title">Juego de Comedor 4 Sillas</h6>
                            <p class="card-text">Este comedor es de la marca vekkahome incluye cuatro sillas, los materiales con los cuales esta fabricada con materiales duraderos y resistentes, las sillas son acolchadas, esto les entrega una mayor comodidad cuando deseen estar lasgos periodos de tiempo en ellas.</p>
                            <p class="card-text"><strong>Precio: Por Definir</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Queso 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="sofa2cuerpos.jpeg" class="card-img-top" alt="lijadora stanley">
                        <div class="card-body">
                            <h6 class="card-title">Sofá Mira 2 Cuerpos Zander</h6>
                            <p class="card-text">Sofa 2 cuerpos de la marca rosen, esta tapizado con cuero pigmentado de alta calidad, esta construido con madera de pino lo que le da una base solidad y resistente, consta con unas dimensiones de 180 cm de ancho, 88cm de altura y 92 cm de profundidad es un sofa el cual se adapta muy bien a lugares reducidos.</p>
                            <p class="card-text"><strong>Precio: Por Definir</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="productos">
            <h2>Tecnologia</h2>
            <div id="tecnologia">
            <div class="row">
                <!-- Queso 1 -->
                <div class="col-md-4">
                    <div class="card">
                    <img src="proyector_android_led_500.JPEG" class="card-img-top" alt="sierra circular">
                        <div class="card-body">
                            <h6 class="card-title">Proyector Android Led 500 ANSI 9000</h6>
                            <p class="card-text">Las funciones que contiene este dispositivo posee un sistema operativo integrado android 9.0 con el cual puede descargar app, igualmente cuenta con conexion inalambrica, sus proyecciones son de 1920x1080P.</p>
                            <p class="card-text"><strong>Precio: Por Definir</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Queso 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="camara1.JPEG" class="card-img-top" alt="sierra circular">
                        <div class="card-body">
                            <h6 class="card-title">Smart Camera Seguridad</h6>
                            <p class="card-text">Esta es una camara de seguridad de la marca Xiaom la cual cuanta con las caracteristicas de grabacion de 1920 por 1080P lo cual le permite grabar en una calidad alta, ademas de contar con una vision de 360°, no pesa mas que 0,312 kg, cuenta igualmente con conexion a wifi.</p>
                            <p class="card-text"><strong>Precio: Por Definir</strong></p>
                        </div>
                    </div>
                </div>

                <!-- Queso 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="tablet1.JPG" class="card-img-top" alt="lijadora stanley">
                        <div class="card-body">
                            <h6 class="card-title">Tablet M9 4GB-128GB 9" IPS</h6>
                            <p class="card-text">Esta tablet de la empresa lenovo cuenta con una camara de 8MP, su pantalla mide apoximadamente 22.86cm o 9 pulgadas, procesador octa core, almacenamiento de 128GB y 4GB de Ram.</p>
                            <p class="card-text"><strong>Precio: Por Definir</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <footer>
        <p>&copy; 2024 E-commerce de diego y cristopher.</p><br>
        <p>&copy; 2024 VentasOcean.</p>
    </footer>
</body>
</html>
