<div class="container">
    <div class="row" id="cart">
        <ol class="breadcrumb bread">
            <li><a href="index.php">Home</a></li>
            <li><a href="?page=cart">Giỏ hàng</a></li>
            <li class="active">Đơn hàng</li>
        </ol>

        <div class="row">
            <div class="col-sm-9">
                <?php
                if (!isset($_SESSION['login_member'])) {
                    //Nếu là khách vãng lai thì bắt khách hàng phải đăng nhập để đặt hàng
                ?>
                    <div class="canhbao">Bạn phải đăng nhập để đặt hàng. Click
                        <a href='index.php?page=loginout' style='font-size:18px; text-decoration: underline;'>đây</a> để
                        đăng ký, hoặc Click
                        <a href='index.php?page=loginout' style='font-size:18px; text-decoration: underline;'>đây</a> để đăng
                        nhập.
                    </div>

                <?php } ?>

                <h3>Đơn đặt hàng của bạn</h3>
                <table class='table table-hover '>
                    <thead>
                        <tr class="active ">
                            <th class="col-sm-1 kc">STT</th>
                            <th class="col-sm-7">Sản phẩm</th>
                            <th class="col-sm-2 text-center">Số lượng</th>
                            <th class="col-sm-2 text-center">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Lấy thông tin trong giỏ hàng -->
                        <?php
                        if (isset($_SESSION['cart'])) {
                            if (count($_SESSION['cart']) > 0) {
                                $total = 0;
                                $id = 0;
                                foreach ($_SESSION['cart'] as $key => $value) {
                                    $id++;
                                    $t1 = $value['dg'] * $value['sl'];
                                    $total += $t1;

                                    echo  "<tr>";
                                    echo "<td> $id </td>";
                                    echo "<td class='product-name' style='width: 80px; height: 60px'><b>" . $value['tensp'] . "</b></td>";
                                    echo "<td class='text-center'>" . $value['sl'] . "</td>";
                                    echo "<td class='text-center'><span class='amount'>" . number_format($t1) . " đ</span></td>";
                                    echo " </tr>";
                                }
                                echo "<td colspan='4' class='actions'>";
                                echo "<span style=' color:red; font-size: 18px'><b>Tổng tiền đơn đặt hàng: " . number_format($total) . " đ</b></span>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <!-- Nếu đã đăng nhập, tiến hành đặt hàng -->
                <?php
                if (isset($_SESSION['login_member'])) { ?>

                    <form method="post">
                        <div class="form-group">
                            <label for="diachigh">Địa chỉ giao hàng:</label>
                            <input class="form-control" rows="5" id="diachigh" name="diachigh"></input>
                        </div>
                        <div class="form-group">
                            <label for="comment">Thông tin thêm:</label>
                            <textarea class="form-control" rows="7" id="comment" name="ghichu"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Đặt hàng</button>
                    </form>

                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $ghichu = $_POST['ghichu'];
                        $user = $_SESSION['username'];
                        $ad = $_POST['diachigh'];
                        $sql = "SELECT makh FROM khachhang WHERE username='$user'";
                        $query = $db->query($sql);
                        $r = $query->fetch();
                        $insert = "INSERT INTO donhang(makh, diachigh, ghichu , ngaytao) VALUES('$r[0]','$ad', '$ghichu',now())";
                        $count = $db->exec($insert);
                        if ($count > 0) {
                            $madh = $db->lastInsertId();
                            //echo $madh;
                            $qct = "INSERT INTO dhchitiet(madh, masp, soluong, dongia) VALUES";
                            foreach ($_SESSION['cart'] as $value) {

                                $m = $value['masp'];
                                $sl = $value['sl'];
                                $dg = $value['dg'];
                                $qct .= "($madh, $m,$sl,$dg),";
                            }

                            $qct = substr($qct, 0, strlen($qct) - 1);
                            $c = $db->query($qct);
                            unset($_SESSION['cart']);
                            echo "<script>"
                                . "if(confirm('Đơn hàng của bạn đã đặt thành công, chúng tôi sẽ xử lý trong thời gian sớm nhất')==true)"
                                . "{"
                                . "window.location='index.php?page=cart'"
                                . "}</script>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>