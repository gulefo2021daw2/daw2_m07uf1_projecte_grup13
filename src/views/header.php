<?php
    session_start();
?>
<html>

<head>

<link rel="stylesheet" href="../public/css/navbar.css">

</head>

<body>
<nav class="navbar-container">
            <div class="logo-container">
                <img src="../public/images/eco-green.png" class="eco-green">
                <h4>AMAZONA</h4>
            </div>
            <div class="shortcuts-container">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./about.php">Nosotros</a></li>
                    <li><a href="./products.php">Productos</a></li>
                    <?php
                        if (isset($_SESSION['user']) && $_SESSION['user'] !== 'admin@amazona.com') {
                            ?>
                            <li><a href="../php/logout.php">Cerrar Sesión</a></li>
                            <li><a href="./shopping-cart.php">Carrito <i class="fas fa-shopping-cart"></i></a></li>
                            <?php
                        } else if (isset($_SESSION['user']) && $_SESSION['user'] === 'admin@amazona.com') {
                            ?>
                            <li><a href="./admin.php">Administrador</a></li>
                            <li><a href="../php/logout.php">Cerrar Sesión</a></li>          
                            <?php
                        } else {
                            ?>
                            <li><a href="./signin.php">Entrar</a></li>
                            <li><a href="./signup.php">Registrar-se</a></li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
        </nav>
</body>

</html>
           
