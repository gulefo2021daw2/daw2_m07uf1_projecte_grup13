<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECTE M07UF1</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../public/css/signup.css">
</head>
<body>
    
    <div class="container">

        <div class="elements-container">

            <?php
                include('header.php');
            ?>
    
            <form class="form-container" method="POST" action="../php/signin.php">
    
                <div class="header-section">
                    <h5 class="title">¡Entra en Amazona!</h5>
                </div>
                <div class="middle-section">
                    <input type="email" name="email" id="i-email" placeholder="Email" required>
                    <input type="password" name="password" id="i-password" placeholder="Contraseña" required>
                </div>
                <div class="bottom-section">
                    <button class="button-submit" type="submit">Entrar</button>
                </div>
    
            </form>

        </div>

    </div>

</body>
</html>