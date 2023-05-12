<?php
    require_once("models/db_module.php");
    
    function getcreateproduct($username, $password)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanKhongTraVeDL ($link, "insert into tbl_user (userid, username, password) values (NULL, '".$username."', '".$password."')");
                                                                                        
        giaiPhongBoNho($link, $result);
    }

?>