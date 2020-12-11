<?php

$image = "";

if(isset($_POST['newProduct'])) {

    if(($_FILES['file']) != "") {
        $target_dir = '../public/images/plants/';
        $file = $_FILES['file']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['file']['tmp_name'];
        $path_filename_ext = $target_dir.$filename.".".$ext;


        // SAVE ROUTE TO BE WRITTEN TO PLANTS LIST AT LAST FIELD
        $image = $path_filename_ext;

        // CHECK IF THE FILE EXISTS
        if (file_exists($image)) {
            echo "Este producto ya existe\n";
        } else {
            move_uploaded_file($temp_name, "../$target_dir/$file");
            echo "Producto añadido correctamente!\n";
        }

    }

    // COUNT FILE LINES TO SET NEW ID
    $file="../../data/plants-list.txt";
    $linecount = 0;
    $handle = fopen($file, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        $linecount++;
    }
    fclose($handle);
    echo $linecount;

    
    $id = $linecount;
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $content = "$id:$name:$description:$price"."€".":$image";

    print_r($content);

    $plantsFile = "../../data/plants-list.txt";    
    if(strpos($file, $name)) 
    {
        die("Este producto ya existe\n");
    } else {
        $myfile = file_put_contents($plantsFile, $content.PHP_EOL , FILE_APPEND | LOCK_EX);
        echo "<p>Done</p>";
        header('Location:../../views/admin.php');
    }
    fclose($file);
}

?>