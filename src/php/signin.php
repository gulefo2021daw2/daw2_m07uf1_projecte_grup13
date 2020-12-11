<?php
    
    $usersListFile = "../data/users-list.txt";    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $file = file_get_contents($usersListFile);
    if(strpos($file, $email." : ".$password) === false) 
    {
        die("El usuario o la contraseña son incorrectos.");
    } else {
        session_start();
        $_SESSION['user'] = $email;
        header('Location:../views/products.php');
    }
    fclose($file);

?>

<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="../public/css/navbar.css">
        <link rel="stylesheet" href="../public/css/signup.css">
	</head>
	<body>
        <div class="container">

            <div class="elements-container">

                <nav class="navbar-container">
                    <div class="logo-container">
                        <img src="../public/images/eco-green.png" class="eco-green">
                        <h4>AMAZONA</h4>
                    </div>
                    <div class="shortcuts-container">
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="./about.php">Nosotros</a></li>
                            <li><a href="./products.php">Productos</a></li>
                            <li><a href="./signin.php">Entrar</a></li>
                            <li><a href="./signup.php">Registrar-se</a></li>
                        </ul>
                    </div>
                </nav>

                <div class="success-body-container">

                    <div class="success-container">
                        <h5 class="success-message">Bienvenido!</h5>
                    </div>

                    <div class="bottom-section">
                        <button class="button-success-signin"><a href="../views/products.php">Ver Productos</a></button>
                    </div>
                </div>

            </div>

    </div>
    </body>
</html>