<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muebles</title>
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
section h2, section h3, section h4 {
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
<section class="productos">
            <h2>Muebles</h2>
            <div class="row">
                <!-- Queso 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="estante_acero.jpeg" class="card-img-top" alt="taladro percutor">
                        <div class="card-body">
                        <h6 class="card-title">Estante Acero Pintado 90x40x180 cm</h6>
                            <p class="card-text">estanteria muy versatil, esta estructurada sobre una base construida con perfiles metalicos ranurados que pueden ser ensamblados sin gran esfuerzo, no requiere de tornillos para ser ensamblado igualmente cuenta con una capacidad de almacenaje de 175 kgs por cada bandeja.</p>
                            <p class="card-text"><strong>Precio: Por Definir</strong></p>
                           <div>
                              <button class="btn btn-primary" onclick="agregarAlCarrito(123)">Agregar al carrito</button> 
                          </div>
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
                            <div>
                              <button class="btn btn-primary" onclick="agregarAlCarrito(123)">Agregar al carrito</button> 
                          </div>
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
                            <div>
                              <button class="btn btn-primary" onclick="agregarAlCarrito(123)">Agregar al carrito</button> 
                          </div>
                        </div>
                    </div>
                </div>


                <!-- Queso 4 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="sillonReclinable.JPEG" class="card-img-top" alt="lijadora stanley">
                        <div class="card-body">
                            <h6 class="card-title">Sillón reclinable 84x92x103 cm</h6>
                            <p class="card-text">Sillon de la marca just home collection, su color es chocolate, su ancho esde 84cm, consta con un alto de 103cm y una profundidad de 92 cm, su tapiz esta fabricado en tela, consta con la caracteristica de ser reclinable.</p>
                            <p class="card-text"><strong>Precio: Por Definir</strong></p>
                            <div>
                              <button class="btn btn-primary" onclick="agregarAlCarrito(123)">Agregar al carrito</button> 
                          </div>
                        </div>
                    </div>
                </div>


                <!-- Queso 5 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="Librero_De_Arbol.JPEG" class="card-img-top" alt="lijadora stanley">
                        <div class="card-body">
                            <h6 class="card-title">Librero De Arbol Organizador De Libros Alto 147cm</h6>
                            <p class="card-text">Este librero cuenta con un diseño de arbol el cual les servira para adornar como guardar y almacenar sus libros, cuenta con una altura de 147cm, andcho de 34cm y una profundidad de 20cm.</p>
                            <p class="card-text"><strong>Precio: Por Definir</strong></p>
                            <div>
                              <button class="btn btn-primary" onclick="agregarAlCarrito(123)">Agregar al carrito</button> 
                              <p><a href="clientes.php">volver al inicio</a></p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <footer>
        <p>&copy; 2024 E-commerce de diego y cristopher.</p>
    </footer>
    
</body>
</html>