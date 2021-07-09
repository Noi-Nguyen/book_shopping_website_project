
<div class="container">
<div class="row" id="cart">
<h2 class="hr-news"> Giỏ hàng</h2>
 <ol class="breadcrumb bread">
	  <li><a href="index.php">Trang chủ</a></li>
	  <li class="active">Giỏ hàng</li>       
 </ol>

<?php



if(isset($_SESSION['cart']))
{
	if($_SERVER['REQUEST_METHOD']=='POST')
	{

	    /*$list=$_POST['txtSL'];
	    foreach ($list as $k => $v) 
	    {
	        $_SESSION['cart'][$k]['sl']=$v;
	    }*/
	 foreach ($_SESSION['cart'] as $k => $v) 
	 {
	    // if($_POST[$k]<=0)
	    //      unset($_SESSION['cart'][$k]);
	    // else
	     $_SESSION['cart'][$k]['sl'] = $_POST[$k];       
	}
}

	
	echo "<div class='col-sm-9 pull-left'>";
    if(count($_SESSION['cart'])>0)
    {
    echo "<form action='' method='post'>";
    echo "  <table class='table table-hover table-condensed' cellspacing='0'>"
        ."<thead>"
        ."<tr >"
        ."<th class=''></th>"
        ."<th class='col-sm-2'>Ảnh</th>"
        ."<th class='col-sm-5'>Tên sách</th>"
        ."<th class='col-sm-2'>Đơn giá</th>"
        ."<th class='col-sm-1'>Số lượng</th>"
        ."<th class='col-sm-2 text-center '>Tổng cộng</th>"
        ."</tr>"
        ."</thead>";
          $total=0;
        echo "<tbody>";

          foreach ($_SESSION['cart'] as $key => $value) 
            {
			
			$q = "select soluong from sanpham where masp =" . $value['masp'];
			$qq = $db->query($q);
			$tn = $qq->fetch()[0];
			
			
			
            $t1= $value['dg']*$value['sl'];
            $total+=$t1;
            echo "<tr class=''>"

                    ."<td class='trash'>"
                    ."<a href='index.php?page=delcart&masp=".$value['masp']."' class=' fa fa-trash-o' style='font-size: 20px;' title='Xóa sách này'></a></td>"

                    ."<td class=''>"
                    ."<a href='index.php?page=sanphamct&masp=".$value['masp']."'>"
                       ."<img style='width: 80px; ' src='hinhanhsp/".$value['ha']."'/></a> </td>"

                    ."<td class=''>"
                    ."<a href='index.php?page=product-detail&masp=".$value['masp']."'>".$value['tensp']."</a> </td>"

                    ."<td class=''>"
                    ."<span class=''>".number_format($value['dg']). " đ</span> </td>"

                    ."<td class=''>"
                    ."<div class=''><input class='form-control' type='number' name='".$value['masp']."' value='" .$value['sl'] ."' title='Số lượng' min='0' max= '".$tn ."' /></div> </td>"

                    ."<td class='text-center'>"
                    ."<span class=''>".number_format($t1)." đ </span> </td>"
                    ."</tr>"
                ."<tr>";
            }
            echo "<td colspan='6' class='actions'>";
            echo  " <a href='index.php?page=product' class='btn btn-info pull-left'><i class='fa fa-angle-left'> Mua thêm</i></a>";
            // echo "<span style='padding-right: 40px; color:black; font-size: 16px'>Tổng tiền: ".number_format($total)." vnđ</span>";

            echo "<div class='pull-right'>";
           
           echo  " <a href='index.php?page=delcart' class='btn btn-danger' style='margin-right:5px;'>xóa hết</a>";
           echo  "<input type='submit' class='btn btn-info' value='Cập nhật'/> ";
          echo "</div>";
            
            echo  "</td>"
        ."</tr>"
        ."</tbody>"
        ."</table>"
        ."</form>";

        echo "</div>";
			echo "<div class='col-sm-3 pull-right breadcrumb'>";
			echo "<h3 class='hr-news'> Giỏ hàng</h3>";
			echo "<h4>Tổng tiền: ". number_format($total) ." VNĐ</h4>";
			echo  " <a href='index.php?page=order' class='btn btn-success'>Thanh toán <i class='fa fa-angle-right'></i></a>"; 
			echo "</div>";
        
    }
 else {
      echo "<h3 style='color: red'>Bạn chưa có sản phẩm nào trong giỏ hàng</h3>" 
          ."<div class='canhbao' style='font-size: 16px'>Click <a href='index.php?page=product' style='font-size:18px; text-decoration: underline;'>đây</a> để mua hàng</div>";
		}

// echo "</div>";

}
    else{
      echo "<h3 style='color: red'>Bạn chưa có sản phẩm nào trong giỏ hàng</h3>" 
          ."<div style='font-size: 16px'>Click <a href='index.php?page=product' style='font-size:18px; text-decoration: underline;'>đây</a> để mua hàng</div>";
    }

?>




</div>



        </div>
        </div>

         <script type="text/javascript" src="./js/scripts.js"></script>