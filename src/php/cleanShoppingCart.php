<?php

if(isset($_POST['cleanShoppingCart'])) {
    file_put_contents("../data/shopping-cart.txt", "");
    header("Location:../views/shopping-cart.php");
}

?>