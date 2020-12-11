<?php
    session_start();
    include('../php/admin/admin.php');
    include('../php/admin/addProduct.php');
    include('../php/admin/deleteProduct.php');
    include('../php/admin/deleteUser.php');
    if($_SESSION['user'] === 'admin@amazona.com') {
        $admin = new Admin();
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
    <link rel="stylesheet" href="../public/css/admin.css">
</head>
<body>
    
    <div class="container">

        <div class="elements-container">

            <?php
                include('header.php');
            ?>

            <form class="form-container" method="POST" style="height: 200px; padding-top: 90px;" action="../php/admin/deleteUser.php" enctype="multipart/form-data">

                <div class="header-section">
                    <h5 class="title">Eliminar Usuario</h5>
                </div>
                <div class="middle-section">
                    <input type="email" name="email" id="email" placeholder="Email del usuario" required>
                </div>
                <div class="bottom-section">
                    <button class="button-submit" name="deleteUser" value="deleteUser" type="submit">Eliminar usuario</button>  
                </div>

            </form>   

            <form class="form-container" method="POST" action="../php/admin/addProduct.php" enctype="multipart/form-data">

                <div class="header-section">
                    <h5 class="title">Añadir Producto</h5>
                </div>
                <div class="middle-section">
                    <input type="text" name="name" id="name" placeholder="Nombre" required>
                    <input type="text" name="description" id="description" placeholder="Descripcion" required>
                    <input type="number" name="price" id="price" placeholder="Precio" required>
                    <input type="file" name="file" id="file" placeholder="Imagen" required>
                </div>
                <div class="bottom-section">
                    <button class="button-submit" name="newProduct" value="newProduct" type="submit">Añadir</button>  
                </div>

            </form>   

            <form class="form-container" style="height: auto;" method="POST" action="../php/admin/deleteProduct.php">

                <div class="header-section" style="padding-top: 50px">
                    <h5 class="title">Eliminar Producto</h5>
                </div>

                <div class="table-container" style="padding-top: 50px">
        
                    <table class="table">

                        <?php
                            $admin->listAllProducts();
                        ?>
            
                    </table>
        
                </div>

            </form>

        </div>

    </div>
     


</body>
</html>