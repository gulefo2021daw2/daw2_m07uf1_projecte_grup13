<?php
    session_start();
    include '../php/shopping-cart.php';
    include '../php/cleanShoppingCart.php';
    if (!isset($_SESSION['user'])) {
        header('Location:./signin.php');
    }
    $shoppingCart = new ShoppingCart();

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECTE M07UF1</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link rel="stylesheet" href="../public/css/shopping-cart.css">

</head>
<body>
    
    <div class="container">

        <?php
            include('header.php');
        ?>

        <div class="table-container">
        
            <table class="table">

                <?php
                    $shoppingCart->listProducts();
                ?>
                
            </table>
            
        </div>
        
        <div class="underList">
            <div class="separatorContainer">
                <div class="separator" />
            </div>

            <div class="total">
                <h3 class="totalTitle">TOTAL</h3>
                <h2 class="price">
                    <?php
                        $shoppingCart->getTotalPrice();
                    ?>
                </h2>
            </div>
            <form action="../php/cleanShoppingCart.php" method="post">
                <button type="submit" class="button-submit" name="cleanShoppingCart">Vaciar carrito</button>  
            </form>
        </div>
        
    </div>

</body>
</html>