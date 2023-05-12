<?php
    class Product{
        private $idproduct;
        private $username;
        private $nameproduct;
        private $quantityproduct;

        public function getidproduct(){return $this->idproduct;}
        public function getusername(){return $this->username;}
        public function getnameproduct(){return $this->nameproduct;}
        public function getquantityproduct(){return $this->quantityproduct;}

        public function __construct ($idproduct, $username, $nameproduct, $quantityproduct){
            $this->idproduct = $idproduct;
            $this->username = $username;
            $this->nameproduct = $nameproduct;
            $this->quantityproduct = $quantityproduct;
        }

    }
?>