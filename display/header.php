<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>UIT store</title>
    <link rel="icon" href="images/logo1.png" type="image/x-icon" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0de70e25d4.js" crossorigin="anonymous"></script>

    <!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="./js/validation.js" type="text/javascript"></script> -->

    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.bootstrap-touchspin.js"></script>
    <script type="text/javascript" src="./js/touchspin.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('ul.tabs li').click(function() {
                var tab_id = $(this).attr('data-tab');

                $('ul.tabs li').removeClass('current');
                $('.tab-content').removeClass('current');

                $(this).addClass('current');
                $("#" + tab_id).addClass('current');
            })
        })
    </script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   -->
    <!-- icon login-->
</head>

<body>
    <header>
        <!-- main header  -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo">
                            <a href="index.php"><img style="max-width: 80%; max-height: 50%" src="images/logo1.png" alt="logo"></a>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="search-w">
                            <!-- <form method="get" class="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search UIT BOOK" name="key">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit" name='page' value="product"><i
                                                class="glyphicon glyphicon-search"></i></button>
                                    </span>
                                </div>
                            </form> -->
                            <nav class="navbar navbar-dark">
                                <!-- Lấy dữ liệu input đầu vào để tìm kiếm với name là Key -->
                                <form class="form-inline" action="#" method="get">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" name='key'>
                                    <button class="btn btn-info" type="submit" name="page" value="product">Search</button>
                                </form>
                            </nav>
                        </div>
                    </div>

                    <!-- <li><a href="index.php?page=contact">Contact</a></li> -->

                    <!-- <?php if (isset($_SESSION['login_member'])) {     ?>
                    <li><a href="index.php?page=orderhistory">Order history</a></li>
                    <?php } ?>
                    </div> -->

                    <div class="col-sm-1" style="padding-right: 25px;">
                        <div class="pull-right">
                            <div class=" pr-header ">
                                <a class="btn-cart" href="index.php?page=cart" style="font-size: 30px;margin-right: 25px;">
                                    <i class="fa fa-shopping-cart"> </i>
                                    <!-- Hiển thị số lượng sản phẩm có trong giỏ hàng -->
                                    <?php
                                    if (isset($_SESSION['cart'])) {
                                        echo "<span class='nb'>";
                                        echo count($_SESSION['cart']);
                                        echo "</span>";
                                    }
                                    ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3" style="padding-top: 10px;">
                        <!-- Kiểm tra xem khách hàng đã đăng nhập hay chưa để hiển thị giao diện phù hợp -->
                        <?php
                        if (!isset($_SESSION['login_member'])) {
                        ?>
                            <ul class="nav nav-pills">
                                <li><a href="index.php?page=loginout" style="font-size: 20px"> Đăng
                                        nhập</a></li>
                                <li><a href="index.php?page=loginout" style="font-size: 20px"> Đăng
                                        ký</a></li>
                            </ul>
                        <?php
                        } else {
                            $query = "select * from khachhang where username= '" . $_SESSION['username'] . "' ";
                            $rows = $db->query($query);
                            $r = $rows->fetch(PDO::FETCH_ASSOC); ?>
                            <ul class="nav row ">
                                <li class="col-sm-7">
                                    <h5 class="nav__til" style="color:black;">
                                        Xin chào:
                                        <!-- <br> -->
                                        <a href='index.php?page=personal&makh=<?php echo $r['makh'] ?>'>
                                            <h3 class="nav__username" style="position: relative ;top:-13px;"><?php echo $r['full_name']; ?></h3>
                                        </a>
                                    </h5>
                                </li>

                                <li class="col-sm-5">
                                    <a href="index.php?page=logout" style="color:black;">
                                        <i class="fa fa-sign-out"></i>Thoát
                                    </a>
                                </li>
                            </ul>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>


        </div>
        <!-- bottom bar -->
        <div class="bottom-bar">
            <!-- <nav class="row">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=product">Cửa hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=news">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=contact">Liên hệ</a>
                    </li>
                </ul>
            </nav> -->
            <div class='row'>
                <span class='title-category col-md-8'> <i class="fas fa-bars"></i> Danh mục sách <i class="fas fa-angle-down"></i></span>
                <span class='title-contact col-md-4'> <i class="fas fa-phone-alt"></i> Hotline: 1900 1999 | <i class="fas fa-comments"></i> <a href='index.php?page=contact' style='color:white'>Liên hệ trực tiếp</a></span>
            </div>

        </div>

    </header>