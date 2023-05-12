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
        <h1>Creat Product</h1>
    </div>
    <form method = "post" action = "">
        <div class = "container">
            <div class = "row">
                <div class = "col">
                    <label class = "lb" for="nameproduct">Tên sản phẩm:</label>
                    <input class = "btn-input" type="text" name = "nameproduct"> <br/>

                    <label class = "lb" for="quantityproduct">Số lượng:</label>
                    <input class = "btn-input" type="text" name = "quantityproduct" ><br/>

                </div>

            </div>

            <div class = "row row-footer">
                <input class = "btn-action" type="submit" value = "Create">
                <a href = "index.php" class = "btn-action" style = "text-decoration: none;">Back</a>
            </div>
        </div>
    </form>

    <?php
        session_start();
        if (isset($_POST['nameproduct'], $_POST['quantityproduct'])){
            $nameproduct = $_POST['nameproduct'];
            $quantityproduct = $_POST['quantityproduct'];
            $username = $_SESSION['username'];

            require_once "models/md_createproduct.php";
            getcreateproduct($username, $nameproduct, $quantityproduct);
        }
        

    ?> 
</body>
</html>