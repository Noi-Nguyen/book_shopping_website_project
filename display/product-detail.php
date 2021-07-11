<div class="container">
    <div class="row">
        <div class="col-md-9 pull-right">
            <ol class="breadcrumb bread">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=product">Shop</a></li>
                <?php
                if (isset($_REQUEST['masp'])) {
                    $masp = $_REQUEST['masp'];
                    $query = "SELECT * FROM sanpham JOIN danhmuc ON sanpham.madm = danhmuc.madm where sanpham.masp=" . $masp;
                    $r = $db->query($query);
                    $rs = $r->fetch();


                    $madm = $rs['madm'];
                    $query = "SELECT * FROM sanpham JOIN danhmuc ON sanpham.madm = danhmuc.madm where sanpham.madm=" . $madm;
                    $rows = $db->query($query);
                    $r = $rows->fetch();
                    echo "<li><a href ='index.php?page=product&madm=$madm'>";
                    echo $r['tendm'];
                    echo "</a></li>";


                    echo "<li>";
                    if (strlen($rs['tensp']) > 55) {
                        echo substr($rs['tensp'], 0, 55) . "...";
                    } else {

                        echo $rs['tensp'];
                    }


                    echo "</li>";
                }
                ?>
            </ol>
        </div>
        <div class="line"></div>



        <!-- Hiển thị chi tiết sản phẩm -->
        <div class="row" style="padding-top: 30px; ">
            <?php include 'display/right.php'; ?>
            <div class="book-detail-body">
                <div class="col-md-9" style="background-color:white;">
                    <!-- <div class="col-md-9 pull-right" style="background-color:white;"> -->
                    <div class="col-md-4">
                        <img src="./hinhanhsp/<?php echo $rs['hinhanh'] ?>" class="img-responsive">
                        <div class="line1"></div>
                    </div>

                    <div class="col-md-8 ">
                        <h3><?php echo $rs['tensp'] ?></h3>

                        <span class="pr">Tác giả: <?php echo $rs['tentg'] ?> </span><br>
                        <span class="pr">Năm xuất bản: <?php echo $rs['soluong'] ?></span><br>
                        <span class="pr">Tình trạng:
                            <?php
                            if ($rs['soluong'])
                                echo "<span style= 'font-weight: bold; color: #007ff0 ' > Còn hàng </span>";
                            else echo "<span style= 'font-weight: bold; color: #ff3425 ' >Hết hàng</span>";
                            ?></span>
                        <br>
                        <span class="price pr">Giá: <?php echo number_format($rs['giaban']) ?> VNĐ</span><br>


                        <div class=" pr info">
                            <a class="btn-cart" href="?page=addcart&masp=<?php echo $rs['masp'] ?>" style="font-size: 22px;">
                                <i class="fa fa-shopping-cart"> CHỌN MUA </i>
                            </a>

                        </div>

                    </div>

                </div>

                <div class="row" style="padding-bottom: 30px;">
                    <div class="col-md-9 pull-right" style="background-color:white;">
                        <div class="article-news-detail">
                            <h4 style="font-weight: bold;"> Giới thiệu sách </h4>
                            <p class="hr-news"></p>
                            <p> <?php echo $rs['mota'] ?> </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Lấy danh sách sản phẩm tương tự như trang product     -->
            <div class="row">
                <div class="col-md-9 list-product">
                    <ol class="breadcrumb bread">
                        <li><a href="index.php">Sách liên quan</a></li>
                    </ol>
                </div>
            </div>
            <div class="col-md-9 list-product">

                <?php
                $masp = $_REQUEST['masp'];
                $query = "SELECT * FROM sanpham JOIN danhmuc ON sanpham.madm = danhmuc.madm where sanpham.masp=" . $masp;
                $r = $db->query($query);
                $rs = $r->fetch();

                $madm = $rs['madm'];
                $query = "SELECT * FROM sanpham JOIN danhmuc ON sanpham.madm = danhmuc.madm where sanpham.madm=" . $madm;
                $rows = $db->query($query);

                foreach ($rows as $r) {
                    if ($r['masp'] != $masp) {
                        # code...
                ?>

                        <div class="col-md-4 product-item detail">
                            <div class="image">
                                <img src="./hinhanhsp/<?php echo $r['hinhanh'] ?>" class="img-responsive">
                                <div class="line1"></div>
                            </div>

                            <div class="title">
                                <h4> <a href="index.php?page=product-detail&masp=<?php echo $r['masp'] ?>" title="<?php echo $r['tensp'] ?>">
                                        <?php
                                        if (strlen($r['tensp']) > 25) {
                                            echo substr($r['tensp'], 0, 25) . "...";
                                        } else {

                                            echo $r['tensp'];
                                        }

                                        ?>
                                    </a></h4>
                            </div>

                            <div class="info" style="padding-bottom: 50px;">
                                <div class="pull-left">
                                    <span class="price"><?php echo $r['giaban'] ?> VNĐ</span>
                                </div>


                                <div class="pull-right">
                                    <a class="btn-cart" href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>


                        </div>


                <?php
                    }
                }


                ?>
            </div>

        </div>
    </div>
</div>