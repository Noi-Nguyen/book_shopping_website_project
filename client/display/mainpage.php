<!-- Start page  -->
<?php include "../includes/header.php"; ?>
    <section class="main_slide">
        <div class="container">
            <div class="row slide_body">
                <div class="col-lg-3 categories">
                    <ul class="list_categories">
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
                            <a href="#"><img src="../assets/slide/brain.jpg" alt="slider1"></a>
                        </div>
                        <div class="item">
                            <img src="slide/../assets/slide/drus.jpg.jpg" alt="slider2">
                        </div>
                        <div class="item">
                            <img src="../assets/slide/history.jpg" alt="slider3">
                        </div>
                        <div class="item">
                            <img src="../assets/slide/trash.jpg" alt="slider3">
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
                            <span class='col-lg-10'><a href="#" style="color:#333;">
                                    <h3 class="title-cate">Sách bán chạy</h3></span>
                            </a>
                            <span class='col-lg-2'>
                                <a href="#" style="color:#333;">
                                    <span class="sub-cate">Xem tất cả <i class="fas fa-angle-double-right"></i></span>
                                </a>
                            </span>
    
                        </div>
                        <div class="row list-book">
                            <div class="col-sm-4 product-item">
                                <div class="product_box">
                                    <a href="#">
                                        <div class="image">
                                            <img src="../assets/1.jpg" class="img-responsive">
                                            <div class="line"></div>
                                        </div>
                                        <div class="info">
                                          
                                            <div class="pull-left">
                                                <span class="price">35.000 VNĐ</span>
                                            </div>
                                            <div class="" style="float:right; padding-right:50px;">
                                                <a class="btn-cart"
                                                    href="#"
                                                    title="Add to cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                        <!--sách nổi bật -->
                        <div class="sach">
                            <h3 class="title-cate">Sách tiêu điểm</h3>
                            <div class="book-special">
                                <div class="row book-body">
                                    <div class="col-sm-4 avt-book">
                                        <a href="#">
                                            <div class="avt-img">
                                                <img src="../assets/1.jpg" alt="anh1">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-8 content-book">
                                        <div class="col-lg-11">
                                            <div>
                                                <a href="#">
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
                                                <a href="#" title="Add to cart"><button
                                                        type="button" class="btn btn-danger">Mua ngay</button>
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
                                <span class='col-lg-10'>
                                    <h3 class="box-tittle title-cate">
                                        <a href="#">Tin tức</a></h3>
                                </span>
                                <span class='col-lg-2'>
                                    <a href="#" style="color:#333;">
                                        <span class="sub-cate">Xem tất cả <i class="fas fa-angle-double-right"></i></span>
                                    </a>
                                </span>
                                <div class="post-new">
                                    <div class="row">
                                     
                                        <div class="col-sm-3 news-item">
                                            <div class="cover-news">
                                                <a href="#">
                                                    <img src="../assets/tintuc1.jpg" class="img-responsive"
                                                        alt="cover">
                                                </a>
                                            </div>
                                            <h4>
                                                <a href="#">
                                                   
                                                </a>
                                            </h4>
                                            <p class="hr-news"><span class="fa fa-clock-o "></span> <time
                                                    datetime=""></time>
                                            </p>
                                            <p>...</p>
                                            <a href="#"
                                                class="read-more">
                                                Read
                                                more</a>
                                        </div>
    
    
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
                                            <img src="../assets/author/nguyenngocthuan.jpg" alt="anh1">
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
    
                    
    
    
                    <div class="right-content col-lg-3">
                        <h3>Sách mới </h3>
                        <div class="list-news">
                            <div class="">
                                <div class="product-right">
                                    <div class="product_box_right row">
                                        <a href="#">
                                            <div class="image-right col-lg-4">
                                                <img src="../assets/slide/trash.jpg" class="img-responsive">
                                                <div class="line"></div>
                                            </div>
                                            <div class="info-right col-lg-8">
                                                <h5></h5>
    
                                                <div class="pull-left">
                                                    <span class="price">35.000 VNĐ</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end product -->
            <!--Tac gia noi bat -->
    
        </section>
    </section>

    <?php include "../includes/footer.php"; ?>