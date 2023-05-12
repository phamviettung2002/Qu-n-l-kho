<?php
    require_once("models/db_module.php");

    function getchoiceproduct($nameinvoice, $username, $nameproduct, $quantityproduct_choice)
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanKhongTraVeDL ($link, "insert into tbl_invoice (idinvoice, nameinvoice, username, nameproduct, quantityproduct_choice ) values (NULL, '".$nameinvoice."', '".$username."', '".$nameproduct."','".$quantityproduct_choice."')");
                                                                                            
            giaiPhongBoNho($link, $result);
        }
?>