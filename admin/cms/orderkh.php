<?php
    if($_SERVER["REQUEST_METHOD"]=='POST')
    {
        $sl=$_POST['sldh'];
        
    }
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mx-auto text-center" style="text-align:center;">Quản lý đơn hàng</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
            <?php
        if(isset($_REQUEST['makh']))
        {
            $makh=$_REQUEST['makh'];
            $query = "select username, donhang.ngaytao, dhchitiet.soluong,"
                    . " dongia, tensp, sanpham.hinhanh, donhang.ngaytao, donhang.trangthai from khachhang join donhang on"
                    . " khachhang.makh=donhang.makh join dhchitiet on donhang.madh=dhchitiet.madh"
                    . " JOIN sanpham on dhchitiet.masp=sanpham.masp where donhang.makh=$makh";
            $rows=$db->query($query);
            echo "<table cellpadding='0' cellspacing='0' border='0' class='table align-center table-striped text-dark ad__table ' id='ad__table'>";
                echo "<tr>"
                        . "<th>Tên sách</th>"
                        . "<th>Đơn giá</th>"
                        . "<th>Số lượng</th>"
                        . "<th>Hình ảnh</th>"
                        . "<th>Ngày đặt</th>"
                        . "<th>Trạng thái</th>"
                        . "</tr>";
                $tong=0;
                    foreach($rows as $r) 
                    {   if($r['trangthai'] == 1) 
                        $tb = "Đã giao hàng";
                        else   $tb = "Chưa giao hàng";
                        $tong+=$r[2]*$r[3];
                        echo "<tr>"
                                . "<td>$r[4]</td>"
                                    . "<td>".number_format($r[3])."&nbsp; vnđ</td>"
                                    . "<td>$r[2]</td>"
                                . "<td>"
                                ."<img style='width: 30px' src='../hinhanhsp/".$r[5]."'>"
                                . "</td>"
                                ."<td>$r[6]</td>"
                                ."<td>$tb</td>"
                                . "</tr>";

                    }
                    
                    echo "</table>";
                    
        }
        echo "<h3>Tổng tiền mà khách hàng đã mua: ".number_format($tong)." vnđ</h3>";
            ?>


        </div>
    </div>
</div>