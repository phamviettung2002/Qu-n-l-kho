<?php
    require_once("models/db_module.php");

    function getremoveproduct ($idproduct)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL ($link,"delete from tbl_product where idproduct = ".$idproduct);
        giaiPhongBoNho($link, $result);
    }
?>