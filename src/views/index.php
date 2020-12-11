<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        file_put_contents('../data/shopping-cart.txt', '');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECTE M07UF1</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./public/css/homeHeroSection.css">
</head>
<body>
    
    <div class="container">

        <?php
            include('header.php');
        ?>

        <div class="homeTitleContainer" style='
            width: 100%;
            height: calc(100vh - 150px);
            display: flex;
            justify-content: center;
            align-items: center;
        '>
            <h3 class="homeTitle" style='
                color: green;
                font-size: 60px;
        '>¡Bienvenido a Amazona!</h3>
        </div>

    </div>

</body>
</html>