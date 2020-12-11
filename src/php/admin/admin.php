<?php

    class Admin {

        function __construct() {}

        function __destruct() {}

        // LIST PRODUCTS
        public function listAllProducts() {

            $fileToRead = '../data/plants-list.txt';
            $lines = file($fileToRead);
            echo "<form action='./admin.php' method='post'>";
            foreach($lines as $line) {
                $cols = preg_split('/:/', trim($line));
                echo "<tr>";
                    echo "<td>".$cols[0]."</td>";
                    echo "<td>".$cols[1]."</td>";
                    echo "<td>".$cols[2]."</td>";
                    echo "<td>".$cols[3]."</td>" ;
                    echo "<td><button type='submit' name='delete' class='deleteButton' value='".$cols[1]."'><p>Eliminar</p></button></td>";                                          
                echo "</tr>";
            }
            $this->deleteProduct();
            echo "</form>";

        }

    } 

?>