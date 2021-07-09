<div class='section'>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- <h2 class="hr-news"> Products</h2> -->
                <nav aria-label="breadcrumb" style="background-color:white;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=product">Cửa
                                hàng</a>
                        </li>
                        <li>
                            <?php
                            if (isset($_REQUEST['madm'])) {
                                $madm = $_REQUEST['madm'];
                                $dsdm = 'select * from danhmuc where madm =' . $madm;
                                $dong = $db->query($dsdm);
                                $r = $dong->fetch();
                                echo $r['tendm'];
                            }
                            ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class='body-shop row' style="background-color:white;">

        <div class="row" style="padding-top: 20px;">
            <?php
            include 'display/right.php';
            ?>

            <div class="col-md-9" style="background-color:white;">

                <div class="row order">
                    <div class="form-group">
                        <form method="post">
                            <label>
                                <div class="form-group">
                                    <select class="form-control orderby" name="orderby">
                                        <option value="1">Xếp theo sản phẩm mới</option>
                                        <option value="2">Xếp theo tên:A->Z</option>
                                        <option value="3">Xếp theo tên:Z->A</option>
                                        <option value="4">Xếp theo giá: Cao đến thấp</option>
                                        <option value="5">Xếp theo giá: Thấp đến cao</option>
                                        <option value="6">Xếp theo mua nhiều nhất</option>
                                    </select>
                                </div>
                            </label>
                            <input type="submit" class="btn btn-primary" value="Sắp xếp">
                        </form>
                    </div>
                </div>
                <?php
                $query = "SELECT count(*) FROM sanpham";
                $rs = $db->query($query);
                $tong = $rs->fetch(PDO::FETCH_ASSOC);
                // echo implode($tong);

                $limit = 16;
                $sotrang = ceil(implode($tong) / $limit);
                if (isset($_REQUEST['pages']) && (int)$_REQUEST['pages'] > 0) {
                    $p = $_REQUEST['pages'];
                    $start = ($p - 1) * $limit;
                } else {
                    $p = 1;
                    $start = 0;
                }
                $query = "SELECT tensp, tentg, giaban, hinhanh, tendm, masp FROM sanpham JOIN danhmuc ON sanpham.madm=danhmuc.madm ";
                if (isset($_REQUEST['madm'])) {
                    $query .= 'and sanpham.madm=' . $_REQUEST['madm'];
                }
                // if(isset($_REQUEST['max']) && isset($_REQUEST['min']))
                // {
                //     $min=$_REQUEST['min'];
                //     $max=$_REQUEST['max'];
                //     $query.=' and '.$min.'<=giaban<='.$max; 
                // }
                if (isset($_REQUEST['key']) && $_REQUEST['key'] != '') {
                    $key = $_REQUEST['key'];
                    $query .= " and tensp like '%$key%'";
                }
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if ($_POST['orderby'] == 2) {
                        $query .= " order by tensp asc";
                    } else if ($_POST['orderby'] == 3) {
                        $query .= " order by tensp desc";
                    } else if ($_POST['orderby'] == 4) {
                        $query .= " order by giaban desc";
                    } else if ($_POST['orderby'] == 5) {
                        $query .= " order by giaban asc";
                    } else $query .= " order by masp desc";
                }

                $query .= " limit $start,$limit";
                //echo $query;
                $rows = $db->query($query);

                foreach ($rows as $r) {
                ?>
                    <!-- <div class="product-grid"> -->
                    <div class="product-item collumn ">
                        <div class="image">
                            <img src="./hinhanhsp/<?php echo $r['hinhanh'] ?>" class="img-responsive">
                            <div class="line1"></div>
                        </div>

                        <div class="title">
                            <a href="index.php?page=product-detail&masp=<?php echo $r['masp'] ?>" title="<?php echo $r['tensp'] ?>">
                                <h5>
                                    <?php
                                    if (strlen($r['tensp']) > 25) {
                                        echo substr($r['tensp'], 0, 25) . "...";
                                    } else {

                                        echo $r['tensp'];
                                    }

                                    ?>
                                    <h6 style='color: #888'><?php echo $r['tentg'] ?></h6>
                                </h5>
                            </a>
                        </div>

                        <div class="info" style="padding-bottom: 50px;">
                            <div class="pull-left">
                                <span class="price"><?php echo number_format($r['giaban']) ?> VNĐ</span>
                            </div>


                            <div class="pull-right">
                                <a class="btn-cart" href="index.php?page=addcart&masp=<?php echo $r['masp'] ?>" title="Add to cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>


                    </div>
                    <!-- </div> -->
                <?php }

                ?>

                <!--  -->

            </div>
        </div>
    </div>
    <div class="row pagination-container">
        <div class="pagination">
            <ul class="hh">
                <!-- 
         echo "<li class='aa'>";
         echo "<a href='index.php?page=product&pages= '>";
         echo "</li>"; -->
                <?php
                if (empty($_GET['madm'])) {
                    for ($i = 1; $i <= $sotrang; $i++) {
                        echo "<li class='active aa'>";
                        echo "<a href='index.php?page=product&pages=$i'> $i </a>";
                        echo   "</li>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>