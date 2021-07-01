<style>
    .detail td{
        width: 200px;
        height: 50px;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mx-auto text-center" style="text-align:center;">Đơn hàng chi tiết
</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
            <?php
                if(isset($_REQUEST['madh']))
                {    
                    $madh=$_REQUEST['madh'];
                    if($_SERVER["REQUEST_METHOD"]=='POST')
                    {
                        $query1 = "update donhang"
                                . " set trangthai= '1'"
                                . "where madh=$madh";
                        $count1=$db->exec($query1);
                    
                    if($count1>0)
                {
            ?>
            <script>
            if (confirm("Xác nhận thành công") == true) {
                //chuyen den trang oder
                window.location = "index.php?page=order";
            }
            </script>;
            <?php
                }
                else{
                    ?>
            <script>
            if (confirm("Đơn hàng đã được xác nhận từ trước") == true) {
                //chuyen den trang oder
                window.location = "index.php?page=order";
            }
            </script>;
        
            <?php        
                }
            }

                
                
                $query = "select dhchitiet.masp, tensp, hinhanh, dhchitiet.dongia, dhchitiet.soluong, sanpham.soluong"
                        . " from dhchitiet join sanpham on dhchitiet.masp = sanpham.masp"
                        . " where madh=$madh";
                $rows=$db->query($query);
                
                echo "<table cellpadding='0' cellspacing='0' border='0' class='table align-center table-striped text-dark ad__table ' id='ad__table'>";
                echo "<tr>"
                        . "<th>Mã sách</th>"
                        . "<th>Tên sách</th>"
                        . "<th>Đơn giá</th>"
                        . "<th>Số lượng</th>"
                        
                        . "<th>Tồn kho</th>"
                            . "<th>Hình ảnh</th>"
                        . "</tr>";
                $tong=0;
                    foreach($rows as $r) 
                    {   
                        $tong+=$r[3]*$r[4];
                        echo "<tr>"
                                . "<td>$r[0]</td>"
                                . "<td>$r[1]</td>"
                                . "<td>".number_format($r[3])."&nbsp; vnđ</td>"
                                . "<td>$r[4]</td>"
                                . "<td>"
                                . $r[5]
                                . "</td>"
                                . "<td>"
                                ."<img style='width: 30px' src='../hinhanhsp/".$r[2]."'>"
                                . "</td>"
                                
                                
                                . "</tr>";

                    }
                    
                    echo "</table>";
            }
            ?>
            <div style="font-size: 16px; color: black; margin-left: 50px; margin-bottom: 50px">
                <?php
                if(isset($_REQUEST['makh']))
                {
                    $makh=$_REQUEST['makh'];
                    
                $show="select full_name, adress, phone, diachigh, ghichu from khachhang join donhang "
                        . "on khachhang.makh=donhang.makh where khachhang.makh=$makh and donhang.madh = $madh";
                $sh=$db->query($show);
                $s=$sh->fetch();
                               
                
            ?>
                <h3>Thông tin chi tiết khách hàng</h3>
                <table class="detail">
                    <tr>
                        <td>Họ tên: </td>
                        <td><?php echo $s[0]?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ khách hàng: </td>
                        <td><?php echo $s[1]?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ giao hàng: </td>
                        <td><?php echo $s[3]?></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại:</td>
                        <td> <?php echo $s[2]?></td>
                    </tr>
                    <tr>
                        <td>Tổng tiền đơn hàng: </td>
                        <td><?php echo number_format($tong) ?>&nbsp; vnđ</td>
                    </tr>
                    <tr>
                        <td>Ghi chú thêm: </td>
                        <td><?php echo $s["ghichu"]?></td>
                    </tr>

                </table>
                <?php } ?>
            </div>
            <?php
        
        ?>
        <form method="post">
            <div class="control-group" style="text-align: center;">
                <div class="controls">
                    <button type="submit" class="btn btn-dark text-light">Xác nhận giao hàng</button>
                </div>
            </div>
        </form>


        </div>
    </div>
</div>