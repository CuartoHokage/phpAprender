<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>Blog de videojuegos</title>
</head>
<body>
    <!-- Cabecera -->
    <header id="header">
    <!-- Logo -->
        <div id="logotipo">
            <a href="index.php">
                Blog de videojuegos
            </a>
        </div>
        <nav id="nav">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="index.php">Categoria 1</a>
                </li>
                <li>
                    <a href="index.php">Categoria 2</a>
                </li>
                <li>
                    <a href="index.php">Categoria 3</a>
                </li>
                <li>
                    <a href="index.php">Categoria 4</a>
                </li>
                <li>
                    <a href="index.php">Sobre mí</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="container">
    <!-- sidebar (barra lateral) -->
        <aside id="sidebar">
        <!-- Login -->
            <div id="login" class="block-aside">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password">

                    <input type="submit" value="Entrar">
                </form>
            </div>
        <!-- Registro -->
            <div id="registro" class="block-aside">
                <h3>Registrarte</h3>
                <form action="registro.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre">
                    
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos">

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password">

                    <input type="submit" value="Registrar">
                </form>
            </div>
        </aside>
    <!-- Caja central -->
        <div id="principal">
            <h1>Últimas entradas</h1>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Descripción de la entrada.
                </p>
            </article>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Descripción de la entrada.
                </p>
            </article>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Descripción de la entrada.
                </p>
            </article>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Descripción de la entrada.
                </p>
            </article>
        </div>
    </div>
    
    <!-- Pie de página -->
    <footer id="pie">
        <p>Desarrollado por Jaime Paz &copy; 2018</p>
    </footer>
</body>
</html>