<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $sl = $_POST['sldh'];
}
?>
<section class="person_page">
    <div class="person_body">
        <div class="row">
            <div class="left_info col-sm-7 row">
                <div class="avt col-sm-4">
                    <img src="https://huntersstore.vn/wp-content/uploads/2018/06/m%C3%B4-h%C3%ACnh-iron-man-mark-43-shf-avengers-aou-bootleg-01.jpg" alt="">
                </div>
                <div class=" info col-sm-8">
                    <div class="user_name"><?php echo $r['full_name']; ?> </div>
                    <a href='index.php?page=edit-personal&makh=<?php echo $r['makh'] ?>'>
                        <button class="btn btn-outline-primary">Chỉnh sửa trang cá nhân</button>
                    </a>
                </div>
            </div>
            <!-- Hiển thị thông tin khách hàng -->
            <div class="right_info col-sm-5">
                <ul>
                    <li><i class="far fa-star"></i>Email: <?php echo $r['email']; ?></li>
                    <li><i class="far fa-calendar-alt"></i>Ngày sinh: <?php echo $r['ngaysinh']; ?> </li>
                    <li><i class="fas fa-map-marked-alt"></i>Số điện thoại: <?php echo $r['phone']; ?></li>
                    <li><i class="far fa-check-circle"></i>Ngày tạo: <?php echo $r['daycreate']; ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="person_selling">
        <div class="titlee">
            <strong>Sản phẩm đã mua</strong>
        </div>
        <!-- <span class="icon">
            <i class="fas fa-search-dollar"></i>
        </span> -->

        <!-- 123 -->
        <!-- Tương tự trang lịch sử giao dịch -->
        <div class="span9">
            <div class="content">
                <div class="module">
                    <?php
                    if (isset($_REQUEST['makh'])) {
                        $makh = $_REQUEST['makh'];
                        $query = "select username, donhang.ngaytao, dhchitiet.soluong,"
                            . " dongia, tensp, sanpham.hinhanh, donhang.ngaytao, donhang.trangthai from khachhang join donhang on"
                            . " khachhang.makh=donhang.makh join dhchitiet on donhang.madh=dhchitiet.madh"
                            . " JOIN sanpham on dhchitiet.masp=sanpham.masp where donhang.makh=$makh";
                        $rows = $db->query($query);
                        echo "<table class='table'>";
                        echo "<tr>"
                            . "<th>Tên sách</th>"
                            . "<th>Đơn giá</th>"
                            . "<th>Số lượng</th>"
                            . "<th>Hình ảnh</th>"
                            . "<th>Ngày đặt</th>"
                            . "<th>Trạng thái</th>"
                            . "</tr>";
                        $tong = 0;

                        foreach ($rows as $r) {
                            if ($r['trangthai'] == 1) {
                                $tb = "Đã giao hàng";
                            } else {
                                $tb = "Chưa giao hàng";
                            }
                            $tong += $r[2] * $r[3];
                            echo "<tr>"
                                . "<td>$r[4]</td>"
                                . "<td>" . number_format($r[3]) . "&nbsp; vnđ</td>"
                                . "<td>$r[2]</td>"
                                . "<td>"
                                . "<img style='width: 30px' src='./hinhanhsp/" . $r[5] . "'>"
                                . "</td>"
                                . "<td>$r[6]</td>"
                                . "<td>$tb</td>"
                                . "</tr>";
                        }

                        echo "</table>";
                    }
                    ?>
                </div>
            </div>
        </div>


    </div>
</section>