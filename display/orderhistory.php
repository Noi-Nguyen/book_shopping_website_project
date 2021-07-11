<div class="container">
    <div class="row">
        <ol class="breadcrumb bread">
            <li><a href="index.php">Home</a></li>
            <li class="active">Lịch sử đặt hàng</li>
        </ol>

        <!-- Check đơn đặt hàng theo khách hàng -->
        <?php
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $query = "SELECT hoten, donhang.ngaytao, dhchitiet.soluong,donhang.madh"
                . " dongia, tensp, sanpham.hinhanh, donhang.ngaytao,dhchitiet.masp, donhang.trangthai FROM khachhang JOIN donhang on"
                . " khachhang.makh=donhang.makh JOIN dhchitiet on donhang.madh=dhchitiet.madh"
                . " JOIN sanpham ON dhchitiet.masp=sanpham.masp where khachhang.taikhoan='$username' ORDER BY donhang.ngaytao desc";
            $rows = $db->query($query);
            // $rs = $rows->fetchAll();

            //              			echo "<pre>";
            // print_r($rows);


            // echo "<pre>";


            // Sau khi lấy dữ liệu từ Database, hiển thị danh sách lịch sử đặt hàng
            echo "  <table class='table table-hover' cellspacing='0'>"
                . "<thead>"
                . "<tr>"
                . "<th class=''>Mã đơn hàng</th>"
                . "<th class=''>Ngày mua</th>"
                . "<th class=''>Ảnh</th>"
                . "<th class=''>Tên sách</th>"
                . "<th class=''>Đơn giá</th>"
                . "<th class='text-center'>Số lượng</th>"
                . "<th class='text-center'>Thành tiền</th>"
                . "<th class='text-center'>Trạng thái</th>"
                . "</tr>"
                . "</thead>";
            $total = 0;
            echo "<tbody>";
            foreach ($rows as $r) {
                //         	echo "<pre>";
                // print_r($r);


                // echo "<pre>";
                $t1 = $r['soluong'] * $r['dongia'];
                $total += $t1;
                $tb = '';
                if ($r['trangthai'] == 1)
                    $tb = "Đã giao hàng";
                else   $tb = "Đang xử lý";

                // 	$r['soluong'] = $r['soluong'] + $r['soluong'];
                // }
                // else

                echo "<tr class=''>"
                    . "<td class=''>" . $r[3] . "</td>"
                    . "<td class=''>" . $r['ngaytao'] . "</td>"
                    . "<td class=''>"
                    . "<a href='index.php?page=product-detail&masp=" . $r[7] . "'>"
                    . "<img style='width: 90px; height: 70px' src='hinhanhsp/" . $r[5] . "'/></a> </td>"

                    . "<td class=''>"
                    . "<a href='index.php?page=product-detail&masp=" . $r[7] . "'>" . $r[4] . "</a> </td>"

                    . "<td class=''>"
                    . "<span class=''>" . number_format($r[3]) . " vnd</span> </td>"

                    . "<td class='text-center'>"
                    . "<div class=''>$r[2]</div> </td>"

                    . "<td class='text-center'>"
                    . "<span class=''>" . number_format($t1) . " vnd </span> </td>"

                    . "<td class='text-center'>"
                    . "<span class=''>" . $tb . "</span> </td>"
                    . "</tr>"
                    . "<tr>";
            }
            echo "<td colspan='12' class='actions'>";
            echo "<span class='pull-right' style='padding-right: 40px; color:black; font-size: 16px'>Tổng tiền đã mua: " . number_format($total) . " vnđ</span>";

            echo  "</td>"
                . "</tr>"


                . "</tbody>"
                . "</table>";
        }
        ?>

    </div>
</div>