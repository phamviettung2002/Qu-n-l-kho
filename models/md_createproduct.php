<?php
    require_once("models/db_module.php");
    
    function getcreateproduct($username, $nameproduct, $quantityproduct)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL ($link, "insert into tbl_product (idproduct, username, nameproduct, quantityproduct ) values (NULL, '".$username."', '".$nameproduct."','".$quantityproduct."')");
                                                                                        
        giaiPhongBoNho($link, $result);
    }

?>