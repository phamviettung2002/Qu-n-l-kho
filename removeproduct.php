<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="file.css/removecar.css">
</head>
<body>
    <div>
        <h1>Do you want to remove car</h1>
    </div>
        
    <?php 
        session_start();
        require_once ("models/model.php");
        $getmethodofModel = new Model();
        $product = $getmethodofModel->getproduct($_GET["idproduct"]);
        
    
    ?>
    <form method = "post" action = "">
        <div class = "container">
        <div class = "row">
                <div class = "col">
                    <label class = "lb" for="idproduct">Id sản phẩm:</label>
                    <input class = "btn-input" type="text" name = "idproduct" value = "<?php echo $product->getidproduct(); ?>" readonly> <br/>

                    <label class = "lb" for="nameproduct">Tên sản phẩm:</label>
                    <input class = "btn-input" type="text" name = "nameproduct" value = "<?php echo $product->getnameproduct(); ?>" readonly> <br/>

                    <label class = "lb" for="quantityproduct">Số lượng:</label>
                    <input class = "btn-input" type="text" name = "quantityproduct" value = "<?php echo $product->getquantityproduct(); ?>" readonly><br/>

                    
                </div>
            </div>

            <div class = "row row-footer">
                <input class = "btn-action" type="submit" value = "Remove">
                <a href = "index.php" class = "btn-action" style = "text-decoration: none;">Back</a>
            </div>
        </div>
    </form>

    
    <?php
        if (isset($_POST['idproduct'])){
            require_once "models/md_removeproduct.php";
            getremoveproduct($_POST['idproduct']);
            $message = "Bạn đã xóa thành công";
                echo "<script type='text/javascript'>alert('$message');</script>";
        }
    ?>
</body>
</html>