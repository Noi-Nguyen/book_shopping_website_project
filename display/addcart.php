<?php
    //$_SESSION['cart'][$masp]
    
    if(isset($_REQUEST["masp"]))
    {
        $masp = $_REQUEST['masp'];
        // $masp =  $_SESSION['cart'];
        if(isset($_SESSION['cart'][$masp]))
        {
            //Tăng số lượng sản phẩm lên 1
            $_SESSION['cart'][$masp]['sl']+=1;


        }
        else
        {
            //Lưu sản phẩm này vào Session
            $query="SELECT tensp, hinhanh, giaban FROM sanpham WHERE masp =" . " $masp";
            $rows=$db->query($query) ;
            $r=$rows->fetch();
            
            $_SESSION['cart'][$masp]  =    array("masp" => $masp, 
                                                "tensp"=>$r[0], 
                                                "ha"=>$r[1], 
                                                "dg"=>$r[2],
                                                "sl"=>1
                                            );
 

            // $_SESSION['cart']  = array ( $masp => array("masp" => $masp, 
            //                                                 "tensp"=>$r[0], 
            //                                                 "ha"=>$r[1], 
            //                                                 "dg"=>$r[2],
            //                                                 "sl"=>1
            //                                 ));
          
        }
         echo "<script>history.back(-1)</script>";
    }
