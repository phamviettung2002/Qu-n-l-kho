<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="file.css/updatecar.css">
</head>
<body>
    <div>
        <h1>Choice Product</h2>
    </div>

    <?php 
        require_once ("models/model.php");
        $getmethodofModel = new Model();
        $product = $getmethodofModel->getproduct($_GET["idproduct"]);
        $quantityproducttemp = $product->getquantityproduct();
    
    ?>

    <form method = "post" action = "">
        <div class = "container">
        <div class = "row">
                <div class = "col">
                    <label class = "lb" for="nameproduct">Tên sản phẩm:</label>
                    <input class = "btn-input" type="text" name = "nameproduct" value = "<?php echo $product->getnameproduct(); ?>"> <br/>

                    <label class = "lb" for="quantityproduct_choice">Số lượng:</label>
                    <input class = "btn-input" type="text" name = "quantityproduct_choice" value = "<?php echo $quantityproducttemp; ?>"><br/>

                    <label class = "lb" for="idinvoice">Chọn số phiếu xuất kho:</label>
                    <input class = "btn-input" type="text" name = "nameinvoice"> <br/>

                </div>

                
            </div>

            <div class = "row row-footer">
                <input class = "btn-action" type="submit" value = "Xuất">
                <a href = "index.php" class = "btn-action" style = "text-decoration: none;">Back</a>
            </div>
        </div>
    </form>

    <?php
        if (isset($_POST['nameproduct'], $_POST['quantityproduct_choice'])){
            $nameproduct = $_POST["nameproduct"];
            $quantityproduct_choice = $_POST['quantityproduct_choice'];
            $nameinvoice = $_POST['nameinvoice'];

            $quantityproduct_choicetempt = intval($quantityproduct_choice);
            if ($quantityproduct_choicetempt <= $quantityproducttemp){

                //xuất sản phẩm chọn
                require_once "models/md_choiceproduct.php";
                getchoiceproduct($nameinvoice, $_SESSION['username'], $nameproduct, $quantityproduct_choice);

                //cập nhật lại số lượng sản phẩm vừa chọn
                require_once "models/md_updateproduct.php";
                getupdateproduct($nameproduct, ($quantityproducttemp - $quantityproduct_choicetempt) , $_GET["idproduct"] );
                
                $message = "Xuất thành công";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else
            {
                $message = "Số lượng bạn chọn lớn hơn mức ở kho";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            

            
        }

        
        
    ?>
</body>
</html> 