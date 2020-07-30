<!DOCTYPE HTML>
<html lang="es">
    <div id="container">
        <head>
            <title>Proyecto-php-poo</title>
            <meta charset="utf-8">
            <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
        </head>
        <body>
            <header id="header">
                <!--CABECERA-->
                <div id="logo">
                    <img src="assets/img/camiseta.png" alt="Camiseta">
                    <a href="index.php">Tienda Camisetas</a>
                </div>
            </header>
            <nav id="menu">
                <!--MENU-->
                <ul>
                    <li>
                        <a href="#">Inicio</a>
                    </li>
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
            <div id="content">
                <!--BARRA LATERAL-->
                <aside id="lateral">
                    <div id="login" class="block_aside">
                        <form action="" method="POST">
                            <label for="email">Email</label>
                            <input type="email" name="email">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password">
                            <input type="submit" value="Entrar"><br>
                        </form>
                        <a href="#">Mis Pedidos</a><br>
                        <a href="#">Gestion Pedidos</a><br>
                        <a href="#">Gestionar Compra</a>
                    </div>
                </aside>
            </div>
            <div id="central">
                <!--CONTENIDO CENTRAL-->
                <h1>Productos Destacados</h1>
                <div class="product">
                    <img src="assets/img/camiseta.png">
                    <h2>Camiseta Azul</h2>
                    <p>30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png">
                    <h2>Camiseta Azul</h2>
                    <p>30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png">
                    <h2>Camiseta Azul</h2>
                    <p>30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                <div class="product">
                    <img src="assets/img/camiseta.png">
                    <h2>Camiseta Azul</h2>
                    <p>30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                 <div class="product">
                    <img src="assets/img/camiseta.png">
                    <h2>Camiseta Azul</h2>
                    <p>30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
                 <div class="product">
                    <img src="assets/img/camiseta.png">
                    <h2>Camiseta Azul</h2>
                    <p>30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
            </div>
            <footer id="footer">
                <!--PIE DE PAGINA-->
                <p>Desarrollado por Diego Andres Cubillos &COPY;
                    <?= date('Y') ?>
                </p>            
            </footer>
    </div>
</body>
</html>