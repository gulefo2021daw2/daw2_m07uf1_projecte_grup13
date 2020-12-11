<?php

    session_start();

    class ShoppingCart {

        public $totalPrice;

        function __construct(){
            $this->totalPrice = 0;
        }

        public function addProduct($productId) {
            
        }

        public function listProducts() {
                $fileToRead = '../data/shopping-cart.txt';
                $lines = file($fileToRead);
                foreach($lines as $line) {
                    $cols = preg_split('/:/', trim($line));
                    echo "<tr>";
                        echo "<td>".$cols[0]."</td>";
                        echo "<td>".$cols[1]."</td>";
                        echo "<td>".$cols[2]."</td>";
                        echo "<td>".$cols[3]."</td>" ;                                          
                    echo "</tr>";
                    $this->totalPrice += $cols[3];
                }            
        }

        public function getTotalPrice() {
            echo $this->totalPrice."€";
        }

    }

?>