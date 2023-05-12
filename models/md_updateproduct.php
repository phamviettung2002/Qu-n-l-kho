<?php
    require_once("models/db_module.php");

    function getupdateproduct( $nameproduct, $quantityproduct, $idproduct)
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanKhongTraVeDL ($link, "update tbl_product set  nameproduct = '".$nameproduct."', quantityproduct = '".$quantityproduct."' where idproduct = ".$idproduct);
            giaiPhongBoNho($link, $result);
        }
?>