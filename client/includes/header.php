<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/allstyle.css">
</head>
<body>
    <header>
        <!-- main header  -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo pull-left">
                            <a ><img style="max-width: 100%" src="../assets/logo.png" alt="logo"></a>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="search-w">
                            <nav class="navbar navbar-dark">
                                <form class="form-inline" action="#" method="get">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" name="key">
                                    <button class="btn btn-info" type="submit" name="page" value="product">Search</button>
                                </form>
                            </nav>
                        </div>
                    </div>

                    <!-- <li><a href="index.php?page=contact">Contact</a></li> -->

                    <!--                     </div> -->

                    <div class="col-sm-1" style="padding-right: 25px;">
                        <div class="pull-right">
                            <div class=" pr-header ">
                                <a class="btn-cart" href="index.php?page=cart" style="font-size: 30px;text-align: right;margin-right: 25px;">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"> </i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3" style="padding-top: 10px;">
                                                <ul class="nav nav-pills">
                            <li><a href="index.php?page=loginout" style="font-size: 20px"> Đăng
                                    nhập</a></li>
                            <li><a href="index.php?page=loginout" style="font-size: 20px"> Đăng
                                    ký</a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>


        </div>
        <!-- bottom bar -->
        <div class="bottom-bar">
          
            <div class="row">
                <span class="title-category col-md-8"> <i class="fas fa-bars" aria-hidden="true"></i> Danh mục sách <i class="fas fa-angle-down" aria-hidden="true"></i></span>
                <span class="title-contact col-md-4"> <i class="fas fa-phone-alt" aria-hidden="true"></i> Hotline: 1900 2311 |  <i class="fas fa-comments" aria-hidden="true"></i> <a href="index.php?page=contact" style="color:white">Liên hệ trực tiếp</a></span>
            </div>

        </div>

    </header>
