<section class="main_slide">
    <div class="container">
        <div class="row slide_body">
            <div class="col-lg-3 categories">
                <ul class="list_categories">
                    <!-- Lấy sản phẩm theo madm -->
                    <!-- <p class="name_categories">Các thể loại sách</p> -->
                    <li><a href="index.php?page=product&madm=25"> Khoa học công nghệ </a></li>
                    <li><a href="index.php?page=product&madm=18"> Kinh doanh </a></li>
                    <li><a href="index.php?page=product&madm=16"> Kỹ năng</a></li>
                    <li><a href="index.php?page=product&madm=16"> Ngôn tình</a></li>
                    <li><a href="index.php?page=product&madm=17"> Nhân vật-sự kiện</a></li>
                    <li><a href="index.php?page=product&madm=23"> Tác phẩm kinh điển</a></li>
                    <li><a href="index.php?page=product&madm=19"> Thiếu nhi</a></li>
                    <li><a href="index.php?page=product&madm=15"> Văn học</a></li>
                    <li><a href="index.php?page=product&madm=20"> Văn hóa-xã hội</a></li>
                    <li><a href="index.php?page=product&madm=21"> Tủ sách gia đình</a></li>
                </ul>
            </div>

            <div id="slider-demo" class="col-lg-9 carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#slider-demo" data-slide-to="0" class="active"></li>
                    <li data-target="#slider-demo" data-slide-to="1"></li>
                    <li data-target="#slider-demo" data-slide-to="2"></li>
                    <li data-target="#slider-demo" data-slide-to="3"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active ">
                        <a href="index.php"><img src="./assets/slide/history.jpg" alt="slider1"></a>
                    </div>
                    <div class="item">
                        <img src="./assets/slide/brain.jpg" alt="slider2">
                    </div>
                    <div class="item">
                        <img src="./assets/slide/drus.jpg" alt="slider3">
                    </div>
                    <div class="item">
                        <img src="./assets/slide/trash.jpg" alt="slider3">
                    </div>
                </div>
                <!-- Controls -->
                <a class="carousel-control-prev" href="#slider-demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#slider-demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
    <!--product -->
    <section class="container">
        <div class="product-list">
            <div class="row">
                <div class="col-lg-9 left-content">
                    <div class="row">
                        <div class="title-content">
                            <span class='col-lg-10'><a href="index.php?page=product" style="color:#333;">
                                    <h3 class="title-cate">Sách bán chạy</h3></span>
                            </a>
                            <span class='col-lg-2'>
                                <a href="index.php?page=product" style="color:#333;">
                                    <!-- <span class="sub-cate"> -->
                                    Xem tất cả <i class="fas fa-angle-double-right"></i>
                                    <!-- </span> -->
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="row list-book">
                        <!-- Lấy danh sách 9 sản phảm sắp xếp theo thứ tự tăng dần -->
                        <?php
                        $query = "SELECT * FROM sanpham ORDER BY masp ASC LIMIT 9"; // . " limit $start, $n";
                        $rows = $db->query($query);
                        foreach ($rows as $r) {
                        ?>
                            <!-- Hiển thị sản phẩm -->
                            <div class="col-sm-4 product-item">
                                <div class="product_box">
                                    <a href="index.php?page=product-detail&masp= <?php echo $r['masp'] ?>">
                                        <div class="image">
                                            <img src="./hinhanhsp/<?php echo $r['hinhanh'] ?>" class="img-responsive">
                                            <div class="line"></div>
                                        </div>
                                        <div class="info">
                                            <h5><?php echo $r['tensp'] ?></h5>
                                            <h6><?php echo $r['tentg'] ?></h6>
                                            <!-- <?php
                                                    if (strlen($r['tensp']) > 25) {
                                                        echo substr($r['tensp'], 0, 25) . " ...";
                                                    } else {

                                                        echo $r['tensp'];
                                                    }
                                                    ?> -->
                                            <div class="infor__shop">
                                                <div class="pull-left">
                                                    <span class="price"><?php echo number_format($r['giaban']) ?> VNĐ</span>
                                                </div>
                                                <div class="infor__cart">
                                                    <a class="btn-cart" href="index.php?page=addcart&masp=<?php echo $r['masp'] ?>" title="Add to cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <!--sách nổi bật -->
                    <div class="sach">
                        <h3 class="title-cate">Sách tiêu điểm</h3>
                        <div class="book-special">
                            <div class="row book-body">
                                <div class="col-sm-4 avt-book">
                                    <a href="index.php?page=product-detail&masp=66">
                                        <div class="avt-img">
                                            <img src="./assets/1.jpg" alt="hotbook">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-8 content-book">
                                    <div class="col-lg-11">
                                        <div>
                                            <a href="index.php?page=product-detail&masp=66">
                                                <h3 style="color:white;">Hát như những vì sao</h3>
                                            </a>
                                            <h4>Đỗ Nhật Nam</h4>
                                            <p>Một câu chuyện giản dị, chứa đầy bất ngờ cho tới trang cuối cùng. Và
                                                đẹp lộng lẫy, vì
                                                lòng vị
                                                tha và tình yêu thương, khiến mắt rưng rưng vì một nỗi mừng vui hân
                                                hoan. Cuốn sách
                                                như
                                                một
                                                đốm lửa thắp lên lòng khát khao sống tốt trên đời.</p>

                                        </div>
                                        <div class="mua" style="float:right;">
                                            <a href="index.php?page=addcart&masp=66" title="Add to cart"><button type="button" class="btn btn-danger">Mua ngay</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!--tin tức -->
                    <div class="newsss container">
                        <div class="news-list row">
                            <div class="title-content">
                                <span class='col-lg-10'>
                                    <h3 class="box-tittle title-cate">
                                        <a href="index.php?page=news">Tin tức</a>
                                    </h3>
                                </span>
                                <span class='col-lg-2'>
                                    <a href="index.php?page=news" style="color:#333;">
                                        <!-- <span class="sub-cate"> -->
                                        Xem tất cả <i class="fas fa-angle-double-right"></i>
                                        <!-- </span> -->
                                    </a>
                                </span>
                            </div>
                            <div class="post-new">
                                <div class="row">
                                    <?php
                                    $query = "SELECT * FROM tintuc ORDER BY matt DESC LIMIT 4";
                                    // . " limit $start, $n";
                                    $rows = $db->query($query);
                                    // $a = $rows->fetch(PDO::FETCH_ASSOC);
                                    // echo implode("<br>",$a);
                                    foreach ($rows as $r) {
                                    ?>
                                        <div class="col-sm-3 news-item">
                                            <div class="cover-news">
                                                <a href="index.php?page=news-detail&matt=<?php echo $r['matt'] ?>">
                                                    <img src="./hinhanhsp/<?php echo $r['anhnen'] ?>" class="img-responsive" alt="cover">
                                                </a>
                                            </div>
                                            <h4>
                                                <a href="index.php?page=news-detail&matt=<?php echo $r['matt'] ?>">
                                                    <?php
                                                    if (strlen($r['tieude']) > 44) {
                                                        echo substr($r['tieude'], 0, 42) . "...";
                                                    } else {
                                                        echo $r['tieude'];
                                                    }
                                                    ?>
                                                </a>
                                            </h4>
                                            <p class="hr-news"><span class="fa fa-clock-o "></span> <time datetime="<?php echo $r['ngaytao'] ?>"><?php echo $r['ngaytao'] ?></time>
                                            </p>
                                            <p><?php echo substr($r['noidung'], 0, 300) ?>...</p>
                                            <a href="index.php?page=news-detail&matt=<?php echo $r['matt'] ?>" class="read-more">
                                                Read
                                                more</a>
                                        </div>

                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--tác giả nổi bật -->
                    <div class="tacgia container">
                        <h3 class="title-cate">Tác giả nổi bật</h3>

                        <div class="tacgiaaa" style="background-color:#0a6f3c">
                            <div class="row book-body">
                                <div class="col-sm-4 avt-book">
                                    <div class="avt-img">
                                        <img src="./assets/author/nguyenngocthuan.jpg">
                                    </div>
                                </div>
                                <div class="col-sm-8 content-book">
                                    <div class="col-lg-11">
                                        <div>
                                            <h3>Nguyễn Ngọc Thuần</h3>
                                            <h4>Sinh ngày 23/11/1999</h4>
                                            <p>Nguyễn Ngọc Thuần (1972) quê ở Tân Thiện - Hàm Tân, Bình Thuận, là
                                                một nhà văn trẻ
                                                đầy triển vọng ở thể loại văn xuôi đương đại, là thành viên của Hội
                                                nhà văn Việt
                                                Nam.Nguyễn Ngọc Thuần tốt nghiệp ĐH Mỹ thuật TP. HCM, sau khi ra
                                                trường anh đầu quân
                                                cho Báo Tuổi trẻ. Thế nhưng cơ duyên đã đưa anh họa sĩ trẻ tiếp cận
                                                văn chương và
                                                "cái tôi" nhà văn đã lấn lướt "cái tôi" họa sĩ. Nguyễn Ngọc Thuần
                                                bước lên đỉnh cao
                                                thành công của văn chương, với hàng loạt các giải thưởng như: Giăng
                                                giăng tơ nhện
                                                (giải thưởng Văn học tuổi hai mươi lần II); giải Peter Pan (giải
                                                thưởng của
                                                Thụy Điển dành cho tác phẩm thiếu nhi hay nhất; Một thiên nằm mộng -
                                                giải A cuộc vận
                                                động sáng tác văn học thiếu nhi của NXB Kim Đồng 2001-2002; Nhện ảo
                                                - giải A cuộc
                                                vận động sáng tác cho thiếu nhi 2003. Ngay cả những nhà phê bình khó
                                                tính nhất cũng chấm
                                                cho
                                                anh trên điểm 5 trong thang điểm 10." </p>

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>

                <script>
                    // Định nghĩa một mảng các phần tử sẽ bỏ vào giỏ hàng
                    var shoppingCartItems = [];

                    // Sự kiện click các button có class=".add-to-cart"
                    $(".add-to-cart").click(function() {
                        var button = $(this); // Lấy đối tượng button mà người dùng click
                        var id = button.attr("id"); // id của sản phẩm là id của button
                        var name = button.attr(
                            "data-name"); // name của sản phẩm là thuộc tính data-name của button
                        var price = button.attr(
                            "data-price"); // price của sản phẩm là thuộc tính data-price của button
                        var quantity = 1; // Số lượng


                        var item = {
                            id: id,
                            name: name,
                            price: price,
                            quantity: quantity
                        };

                        var exists = false;
                        if (shoppingCartItems.length > 0) {
                            $.each(shoppingCartItems, function(index, value) {
                                // Nếu mặt hàng đã tồn tại trong giỏ hàng thì chỉ cần tăng số lượng mặt hàng đó trong giỏ hàng.
                                if (value.id == item.id) {
                                    value.quantity++;
                                    exists = true;
                                    return false;
                                }
                            });
                        }

                        // Nếu mặt hàng chưa tồn tại trong giỏ hàng thì bổ sung vào mảng
                        if (!exists) {
                            shoppingCartItems.push(item);
                        }

                        // Lưu thông tin vào sessionStorage
                        sessionStorage["shopping-cart-items"] = JSON.stringify(
                            shoppingCartItems
                        ); // Chuyển thông tin mảng shoppingCartItems sang JSON trước khi lưu vào sessionStorage
                        // Gọi hàm hiển thị giỏ hàng
                        displayShoppingCartItems();
                    });

                    // Xóa hết giỏ hàng shoppingCartItems
                    $("#button-clear").click(function() {
                        shoppingCartItems = [];
                        sessionStorage["shopping-cart-items"] = JSON.stringify(shoppingCartItems);
                        $("#table-products > tbody").html("");
                    });


                    // Hiển thị giỏ hàng ra table
                    function displayShoppingCartItems() {
                        if (sessionStorage["shopping-cart-items"] != null) {
                            shoppingCartItems = JSON.parse(sessionStorage["shopping-cart-items"]
                                .toString()
                            ); // Chuyển thông tin từ JSON trong sessionStorage sang mảng shoppingCartItems.

                            $("#table-products > tbody").html("");
                            // Duyệt qua mảng shoppingCartItems để append từng item dòng vào table
                            $.each(shoppingCartItems, function(index, item) {
                                var htmlString = "";
                                htmlString += "<tr>";
                                htmlString += "<td>" + item.id + "</td>";
                                htmlString += "<td>" + item.name + "</td>";
                                htmlString += "<td style='text-align: right'>" + item.price + "</td>";
                                htmlString += "<td style='text-align: right'>" + item.quantity + "</td>";
                                htmlString += "<td style='text-align: right'>" + item.price * item.quantity +
                                    "</td>";
                                htmlString += "</tr>";

                                $("#table-products > tbody:last").append(htmlString);

                            });
                        }
                    }
                </script>

                <script type='text/javascript' src="./js/jquery.mycart.js"></script>
                <script type="text/javascript" src="./js/cart.js"></script>
                <script type="text/javascript" src="./js/scripts.js"></script>


                <div class="right-content col-lg-3">
                    <h3>Sách mới </h3>
                    <div class="list-news">
                        <div class="">
                            <?php
                            $query = "SELECT * FROM sanpham ORDER BY masp DESC LIMIT 17"; // . " limit $start, $n";
                            $rows = $db->query($query);
                            foreach ($rows as $r) {
                            ?>
                                <div class="product-right">
                                    <div class="product_box_right row">
                                        <a href="index.php?page=product-detail&masp= <?php echo $r['masp'] ?>">
                                            <div class="image-right col-lg-4">
                                                <img src="./hinhanhsp/<?php echo $r['hinhanh'] ?>" class="img-responsive">
                                                <div class="line"></div>
                                            </div>
                                            <div class="info-right col-lg-8">
                                                <h5><?php echo $r['tensp'] ?></h5>

                                                <div class="pull-left">
                                                    <span class="price"><?php echo number_format($r['giaban']) ?> VNĐ</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end product -->
        <!--Tac gia noi bat -->

    </section>
</section>