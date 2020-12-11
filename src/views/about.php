<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECTE M07UF1</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link rel="stylesheet" href="../public/css/homeHeroSection.css">
    <link rel="stylesheet" href="../public/css/about.css">
</head>
<body>
    
    <div class="container">

        <?php
            include('header.php');
        ?>

        <div class="bg-container">
            <div class="hero-bg"></div>
        </div>

        <div class="about-1-container">
            <div class="about-left">
                <h3 class="about-title">Sobre Nosotros</h3>
                <p class="about-text-p1">Creemos que un mundo lleno de plantas es un mundo mejor</p>
                <p class="about-text-p2">Queremos convertirnos en tu lugar favorito para todo lo relacionado con el
                     mundo de las plantas: desde diferentes tipos de plantas, macetas de diseño y accesorios, hasta 
                     consejos y programas de cuidados personalizados.</p>
                <p class="about-text-p3">Nuestra misión consiste en ayudarte a encontrar tu planta perfecta para 
                    transformar tus ambientes en espacios con estilo, llenos de vida y calidez</p>
            </div>
            <div class="about-right">
                <div class="bg"></div>
            </div>
        </div>

        <div class="about-2-container">
            <div class="about-right">
                <div class="bg-2"></div>
            </div>
            <div class="about-left">
                <h3 class="about-title"> El momento es ahora</h3>
                <p class="about-text-p1">El impacto del CO2 es real: este gas es producto de la actividad industrial 
                    y las emisiones de los coches. El exceso de CO2 incrementa la retención de calor en la atmósfera, 
                    aumentando los niveles de calentamiento global. 
                </p>
                <p class="about-text-p2">Juntos podemos hacer una diferencia y ayudar a reducir los niveles de CO2 en 
                    nuestras ciudades, ayudando a evitar el cambio climático que puede destruir nuestro planeta.
                </p>
                <p class="about-text-p3">¿Cómo puedes contribuir? Ya sea que en tu hogar tengas solo una planta o una 
                    jungla: más verde ayudará en la lucha por reducir las cantidades de gases tóxicos.
                </p>
            </div>
        </div>

       


    </div>

</body>
</html>