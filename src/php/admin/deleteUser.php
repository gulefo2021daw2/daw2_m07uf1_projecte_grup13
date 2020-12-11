<?php

if(isset($_POST["deleteUser"])) {
    $user = $_POST["email"];

    $lines = file("../../data/users-list.txt");
    foreach($lines as $key => $line) {
        if(strstr($line, $user)) {
            unset($lines[$key]);
        }
    }
    $data = implode("", array_values($lines));

    $file = fopen("../../data/users-list.txt", "w");
    fwrite($file,$data);
    fclose($file);

    header('Location:../../views/admin.php');

}


?>