<?php
    class Invoice{
        private $idinvoice;
        private $nameinvoice;
        private $username;
        private $nameproduct;
        private $quantityproduct_choice;


        public function getidinvoice(){return $this->idinvoice;}
        public function getnameinvoice(){return $this->nameinvoice;}
        public function getusername(){return $this->username;}
        public function getnameproduct(){return $this->nameproduct;}
        public function getquantityproduct_choice(){return $this->quantityproduct_choice;}

        public function __construct ($idinvoice, $nameinvoice, $username, $nameproduct, $quantityproduct_choice){
            $this->idinvoice = $idinvoice;
            $this->nameinvoice = $nameinvoice;
            $this->username = $username;
            $this->nameproduct = $nameproduct;
            $this->quantityproduct_choice = $quantityproduct_choice;
        }

    }
?>