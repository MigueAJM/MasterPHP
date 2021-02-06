<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Tienda de camisetas</title>
        <link rel="stylesheet" href="assets/css/styles.css" />
    </head>
    <body>
        <div id="container">
            <!--CABECERA-->
            <header id="header">
                <div id="logo">
                    <img src="assets/img/camiseta.png" atl="camiseta logo"/>
                    <a href="index.php">
                        Tienda de camisetas
                    </a>
                </div>
            </header>   

            <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="#">Categoria 1</a>
                    </li>
                    <li>
                        <a href="#">Categoria 2</a>
                    </li>
                    <li>
                        <a href="#">Categoria 3</a>
                    </li>
                    <li>
                        <a href="#">Categoria 4</a>
                    </li>
                    <li>
                        <a href="#">Categoria 5</a>
                    </li>
                </ul>
            </nav>

            <!-- BARRA LATERAL -->
            <div id="contentd">
                <aside id="lateral">
                    <div id="login" class="block_aside">
                        <form action="#" method="post">
                            <label for="email">Email</label>
                            <input type="email" name="email" />
                            <label for="password">Password</label>
                            <input type="password" name="password" />
                            <input type="submit" value="Enviar" />
                        </form>

                        <a href="#">Mis pedidos</a>
                        <a href="#">Gestiionar mis pedidos</a>
                        <a href="#">Gestionar categorias</a>
                    </div>
                </aside>
            </div>

            <!-- CONTENIDO CENTRAL -->
            <div id="central">
                <div class="product">
                    <img src="assets/img/camiseta.png" />
                    <h2>Camiseta Azul ancha</h2>
                    <p>300 pesos</p>
                    <a href="#">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png" />
                    <h2>Camiseta Azul ancha</h2>
                    <p>300 pesos</p>
                    <a href="#">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png" />
                    <h2>Camiseta Azul ancha</h2>
                    <p>300 pesos</p>
                    <a href="#">Comprar</a>
                </div>
            </div>

            <!-- PIE DE PAGINA-->
            <div id="footer">
                <p>Desarrollado por Miguel Angel &copy; <?= date('Y') ?></p>
            </div>
        </div>
    </body>
</html>

