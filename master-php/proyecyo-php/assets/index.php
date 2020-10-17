<! DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Blog de videojuegos</title>
    </head>
    <body>
        <!--CABECERA-->
        <header id="cabecera">
            <!--LOGO-->
            <div id="logo">
                <a href="index.php">
                    Blog de videojuegos
                </a>
            </div>

            <!--MENU-->
            <nav id="menu">
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
                        <a href="index.php">Sobre mi</a>
                    </li>
                    <li>
                        <a href="index.php">Contacto</a>
                    </li>
                </ul>
            </nav>
        </header>
        
        <div id="contenedor">
                    <!--BARRA LATERAL-->
            <aside id="sidebar">
                <div id="login" class="bloque">
                    <h3>Identificate</h3>
                    <form action="login.php" method="POST">
                        <label for="email">Emial</label>
                        <input type="email" name="email">

                        <label for="password">Contraseña</label>
                        <input type="password" name="password">

                        <input type="submit" value="Entrar">
                    </form>   
                </div>
                <div id="register" class="bloque">
                    <h3>Identificate</h3>
                    <form action="registro.php" method="POST">
                        <label for="nombre">Emial</label>
                        <input type="text" name="nombre">

                        <label for="apellidos">Emial</label>
                        <input type="text" name="apellidos">

                        <label for="email">Emial</label>
                        <input type="email" name="email">

                        <label for="password">Contraseña</label>
                        <input type="password" name="password">

                        <input type="submit" value="Registrar">
                    </form>   
                </div>
            </aside>
        </div>
        <div id="principal">
            <!--CAJA PRINCIPAL-->
            <h1>Ultimas entradas</h1>

            <article class="entada">
                <h2>Titulo de mi entradas</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Modi harum animi molestias molestiae consequatur voluptatem, 
                    nesciunt quisquam deleniti nulla a id perferendis ratione, 
                    deserunt excepturi. Natus sed veritatis accusantium numquam.
                </p>
            </article>
            <article class="entada">
                <h2>Titulo de mi entradas</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Modi harum animi molestias molestiae consequatur voluptatem, 
                    nesciunt quisquam deleniti nulla a id perferendis ratione, 
                    deserunt excepturi. Natus sed veritatis accusantium numquam.
                </p>
            </article>
            <article class="entada">
                <h2>Titulo de mi entradas</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Modi harum animi molestias molestiae consequatur voluptatem, 
                    nesciunt quisquam deleniti nulla a id perferendis ratione, 
                    deserunt excepturi. Natus sed veritatis accusantium numquam.
                </p>
            </article>
            <article class="entada">
                <h2>Titulo de mi entradas</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Modi harum animi molestias molestiae consequatur voluptatem, 
                    nesciunt quisquam deleniti nulla a id perferendis ratione, 
                    deserunt excepturi. Natus sed veritatis accusantium numquam.
                </p>
            </article>
        </div>
        <!--PIE DE PAGINA-->


    </body>
</html>