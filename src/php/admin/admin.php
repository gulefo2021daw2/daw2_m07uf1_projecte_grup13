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

        public function listAllUsers() {

            $fileToRead = '../data/users-list.txt';
            $lines = file($fileToRead);
            echo "<tr><td style='padding: 0 30px 0 30px;'><h3>Nombre</h3></td><td style='padding: 0 30px 0 30px;'><h3>Apellidos</h3></td><td style='padding: 0 30px 0 30px;'><h3>Direccion</h3></td><td style='padding: 0 30px 0 30px;'><h3>Email</h3></td></tr>";
            foreach($lines as $line) {
                $cols = preg_split('/:/', trim($line));
                echo "<tr>";
                    echo "<td style='padding: 0 30px 0 30px;'>".$cols[0]."</td>";
                    echo "<td style='padding: 0 30px 0 30px;'>".$cols[1]."</td>";
                    echo "<td style='padding: 0 30px 0 30px;'>".$cols[2]."</td>";
                    echo "<td style='padding: 0 30px 0 30px;'>".$cols[3]."</td>" ;
                echo "</tr>";
            }

        }

    } 

?>