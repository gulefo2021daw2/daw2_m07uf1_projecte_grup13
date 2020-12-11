<?php
    class Product {

        private $id;
        private $name;
        private $description;
        private $price;
        private $image;

        function __construct($id, $name, $description, $price, $image) {
            $this->id = $id;
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
            $this->image = $image;
        }
    
        public function getName() {
            return $this->name;
        }

        public function getId() {
            return $this->id;
        }

        public function getDescription() {
            return $this->description;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getImage() {
            return $this->image;
        }

        public function addProductToShoppingCart() {
            $fileToRead = '../data/plants-list.txt';
            $fileToWrite = '../data/shopping-cart.txt';
            if(isset($_POST['addCart'])) {
                $id = $_POST['addCart'];
                $searchFor = "$id:$name";
                $lines = file($fileToRead);
                foreach($lines as $line) {
                    if(strpos($line,$searchFor) !== false) {
                        $shoppingCartFile = fopen($fileToWrite, 'a');
                        fwrite($shoppingCartFile, $line);
                        fclose($shoppingCartFile);
                    break;
                    }
                }

            }
        }

    }

?>