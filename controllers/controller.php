<?php
    require_once ("models/model.php");
    session_start();

    class Controller
    {
        public $model;

        public function __construct()
        {
            $this->model = new Model();
        }
        public function invoke()
        {

            if (isset($_SESSION['username']))
            {
                

                if(!isset($_GET["idproduct"])){
                    $products = $this->model->getproductlist();
                    include "views/home.php";
                }
                else
                {
                    $invoice = $this->model->getproduct($_GET["idproduct"]);
                    
                    include "views/choiceproduct.php";
                }
                
				
            }   
        }

        public function invokeadmin()
        {
            if (isset($_SESSION['username']))
            {
                

                if(!isset($_GET["idproduct"])){
                    $products = $this->model->getproductlistofadmin();
                    include "views/admin.php";
                }
                // else{
                //     $car = $this->model->getCar($_GET["carid"]);
                //     $carname = ""; $cartitle = ""; $carprice = ""; $carimage = ""; $carimage1 = ""; $carimage2 = ""; $cardescription = ""; $carnumberofseats = ""; $carstyle = ""; $carfuel = ""; $carorigin = ""; $cargear = "";
                //     include "views/updatecar.php";
                //     $this->model->getupdatecar($carname, $cartitle, $carprice, $carimage, $carimage1, $carimage2, $cardescription, $carnumberofseats, $carstyle, $carfuel, $carorigin, $cargear, $_GET["carid"]);
                // }
            }
        }

        public function Login($username, $password)
        {
            $a = $this->model->Login($username, $password);
            if ($a == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
            }
        }

        public  function Register($username, $password)
        {
            return $this->model->Register($username, $password);
        }

        
    }
?>