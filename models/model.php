<?php
    require_once("models/db_module.php");
    require_once("models/product.php");
    require_once("models/invoice.php");
    require_once("models/user.php");
    
    class Model 
    {
        //Lấy danh sách sản phẩm theo tên tài xế
        public function getproductlist()
        {
            $username = $_SESSION['username'];
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL ($link, "select * from tbl_product where username = '$username'");
            $data = array ();
            while ($rows = mysqli_fetch_assoc($result)){
                $product = new Product ($rows["idproduct"], $rows["username"], $rows["nameproduct"], $rows["quantityproduct"]);
                array_push($data, $product);
            }
            giaiPhongBoNho($link, $result);
            return $data;
        }

        //Lấy tất cả danh sách sản phẩm
        public function getproductlistofadmin()
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL ($link, "select * from tbl_product");
            $data = array ();
            while ($rows = mysqli_fetch_assoc($result)){
                $product = new Product ($rows["idproduct"], $rows["username"], $rows["nameproduct"], $rows["quantityproduct"]);
                array_push($data, $product);
            }
            giaiPhongBoNho($link, $result);
            return $data;
        }

        //lấy sản phẩm theo id
        public function getproduct($idproduct)
        {
            $allproducts = $this->getproductlist();
            foreach($allproducts as $product){
                if ($product->getidproduct()===$idproduct){
                    return $product;
                }
            }
            return null;   
        }

        //lấy danh sách hóa đơn theo tên
        public function getinvoicelist()
        {
            $username = $_SESSION['username'];
            $link = null;
            taoKetNoi($link);
            //$result = chayTruyVanTraVeDL ($link, "select * from tbl_invoice where username = '$username'");
            $result = chayTruyVanTraVeDL ($link, "SELECT * FROM `tbl_invoice` WHERE username='$username' ORDER BY `tbl_invoice`.`nameinvoice` ASC");
            $data = array ();
            while ($rows = mysqli_fetch_assoc($result)){
                $invoice = new Invoice ($rows["idinvoice"], $rows["nameinvoice"], $rows["username"], $rows["nameproduct"], $rows["quantityproduct_choice"]);
                array_push($data, $invoice);
            }
            giaiPhongBoNho($link, $result);
            return $data;
        }


        //lấy danh sách tất cả hóa đơn
        public function getinvoicelistofadmin()
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL ($link, "select * from tbl_invoice");
            //$result = chayTruyVanTraVeDL ($link, "SELECT * FROM `tbl_invoice` WHERE username='$username' ORDER BY `tbl_invoice`.`nameinvoice` ASC");
            $data = array ();
            while ($rows = mysqli_fetch_assoc($result)){
                $invoice = new Invoice ($rows["idinvoice"], $rows["nameinvoice"], $rows["username"], $rows["nameproduct"], $rows["quantityproduct_choice"]);
                array_push($data, $invoice);
            }
            giaiPhongBoNho($link, $result);
            return $data;
        }

        //Lấy tất cả danh sách tài xế
        public function getlistuser()
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL ($link, "select * from tbl_user");
            $data = array ();
            while ($rows = mysqli_fetch_assoc($result)){
                $user = new User ($rows["userid"], $rows["username"], $rows["password"]);
                array_push($data, $user);
            }
            giaiPhongBoNho($link, $result);
            return $data;
        }

        //lấy tài xế theo username
        public function getuser($userid)
        {
            $allusers = $this->getlistuser();
            foreach($allusers as $user){
                if ($user->getUserid()===$userid){
                    return $user;
                }
            }
            return null;   
        }

        // Hàm đăng nhập
        public function Login($username, $password)
        {
            $link = null;
            taoKetNoi($link);
            $cautruyvan = "select * from tbl_user  where username = '$username' AND password='$password'";
            $result = chayTruyVanTraVeDL($link, $cautruyvan);
        
            $count = mysqli_num_rows($result);
            giaiPhongBoNho($link, $result);
            
            return $count;
        }



        // Hàm đăng ký
        public function Register($username, $password)
        {
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanKhongTraVeDL($link, "INSERT INTO tbl_user (username, password) VALUES ('$username','$password')");
        
        }
		
    }
?>