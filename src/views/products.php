<?php
    session_start(); 
    include '../php/product.php';
    include '../php/shopping-cart.php';    
    setcookie('storeProductList');
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
    <link rel="stylesheet" href="../public/css/products.css">
</head>
<body>
    
    <div class="container">

        <?php
            include('header.php');
        ?>

        <div class="bg-container">
            <div class="hero-bg"></div>
        </div>

        <div class="grid-container">
            <div class="grid">

                <?php
                    $fila = 1;
                    if(isset($_SESSION['user'])) {
                        $shoppingCart = new ShoppingCart();
                    }
                    if (($plantsFile = fopen("../data/plants-list.txt","r")) !== false ) {
                        $productList = [];
                        $productListIndex = 0;
                        while (($data = fgetcsv($plantsFile,0,":")) !== false) {
                            $number = count($data);
                            $fila++;
                            $product = new Product($data[0],$data[1],$data[2],$data[3],$data[4]);
                            $productList[] = (object) [
                                "id" => $product->getId(),
                                "name" => $product->getName(),
                                "image" => $product->getImage(),
                                "description" => $product->getDescription(),
                                "price" => $product->getPrice()
                            ];
                            $productListIndex++;
                            ?>
                            <?php echo "<article id='".$product->getId()."'>" ?>
                            <div class="button-shopping-cart-container">
                            <form method="POST" style="height: 100%">
                                <?php 
                                    if(isset($_SESSION['user'])) {
                                        echo "<button type='submit' name='addCart' class='button-shopping-cart' value='".$product->getId()."'><p>Añadir al carro</p></button>";
                                    } else {
                                        echo "<button type='submit' name='addCart' class='button-shopping-cart' value='Añadir al carro'><p>Añadir al carro</p></button>";
                                    }
                                ?>
                            </form>
                            </div>
                                <?php echo "<img src='".$product->getImage()."' alt=''>"?>
                                <div class="article-text">
                                <?php echo "<h3>".$product->getName()."</h3>"?>
                                    <div class="price-row">
                                        <?php echo "<p>".$product->getDescription()."</p>"?>
                                        <?php echo "<p class='price'>".$product->getPrice()."</p>" ?>
                                        
                                    </div> 
                                    
                                </div>
                                
                            </article>
                            
                            <?php

                        }
                        fclose($plantsFile);
                        if($_SESSION['user'] !== 'admin@amazona.com') {
                            $product->addProductToShoppingCart();
                        }
                    }
                ?>

            </div>
        </div>

    </div>

</body>
</html>