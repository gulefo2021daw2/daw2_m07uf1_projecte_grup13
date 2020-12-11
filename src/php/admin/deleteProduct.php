<?php

if(isset($_POST["delete"])) {
    $buttonValue = $_POST['delete'];

    $lines = file("../../data/plants-list.txt");
    foreach($lines as $key => $line) {
        if(strstr($line, $buttonValue)) {
            unset($lines[$key]);
        }
    }
    $data = implode("", array_values($lines));

    $file = fopen("../../data/plants-list.txt", "w");
    fwrite($file,$data);
    fclose($file);

    header('Location:../../views/admin.php');

}

?>