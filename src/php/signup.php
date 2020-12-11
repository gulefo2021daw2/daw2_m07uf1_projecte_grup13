<?php
    
    $usersListFile = "../data/users-list.txt";    
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $content = "\n$name : $lastName : $address : $email : $password";

    $file = file_get_contents($usersListFile);
    if(strpos($file, $email)) 
    {
        die("Ya existe una cuenta asociada a este correo electronico.");
    } else {
        $file = fopen($usersListFile, 'a') or die("Can't register user.");
        fwrite($file, $content);
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
                            <li><a href="../index.html">Home</a></li>
                            <li><a href="../views/about.html">Nosotros</a></li>
                            <li><a href="../views/products.html">Productos</a></li>
                            <li><a href="../views/signin.html">Entrar</a></li>
                            <li><a href="../views/signup.html">Registrar-se</a></li>
                        </ul>
                    </div>
                </nav>

                <div class="success-body-container">

                    <div class="success-container">
                        <h5 class="success-message">Te has registrado correctamente</h5>
                        <p class="success-subtitle">Entra en tu nuevo perfil y disfruta de nuestros productos</p>
                    </div>

                    <div class="bottom-section">
                        <button class="button-success-signin"><a href="../views/signin.php">Entrar</a></button>
                    </div>
                </div>

            </div>

    </div>
    </body>
</html>