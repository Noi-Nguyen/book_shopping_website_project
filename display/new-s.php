<?php
    $q = "SELECT count(*) FROM tintuc";
    $rs = $db->query($q);
    $tong = $rs->fetch(PDO::FETCH_ASSOC);  
    echo implode("/", $tong). '<br>'; // đổi mảng thành chuỗi
    $n=3;
    $sotrang = ceil(implode($tong)/$n);// hàm làm tròn
    
    if(isset($_REQUEST['p']) && (int)$_REQUEST['p']>0)
    {
        $p = $_REQUEST['p'];
        $start = ($p-1)*$n;
    }
    else
    {
        $p = 1;
        $start = 0;
    }

    $query="SELECT * FROM tintuc ORDER BY matt DESC LIMIT $start,$n";
           // . " limit $start, $n";
    $rows=$db->query($query);
    $rowss = $rows->fetch(PDO::FETCH_ASSOC);
    //echo implode("/", $rowss);
    foreach ($rows as $r)    
?>





<!-- Page Content -->
<div class="container">

    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-10">

            <h1 class="page-header">
                News

            </h1>
            <!-- First Blog Post -->

            <h3>
                <a href="#">Blog Post Title</a>
            </h3>
            <p><span class="fa fa-clock-o"></span> Posted on August 28, 2013 at 10:00 PM</p>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    <a href="index.php?page=news-detail"><img class="img-responsive" src="./hinhanhsp/9856.jpg" alt=""
                            text-align: center></a>
                </div>

                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora,
                        necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi
                        corrupti debitis ipsum officiis rerum.</p>
                    <a class="btn btn-primary" href="index.php?page=news-detail">Read More <span
                            class="glyphicon glyphicon-chevron-right"></span></a>
                </div>

            </div>

            <hr>

            <h3>
                <a href="#">Blog Post Title</a>
            </h3>
            <p class="lead">
                by <a href="index.php">Start Bootstrap</a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
            <hr>


            <div class="row">
                <div class="col-md-4">
                    <a href=""><img class="img-responsive" src="./hinhanhsp/9856.jpg" alt="" text-align: center></a>
                </div>

                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora,
                        necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi
                        corrupti debitis ipsum officiis rerum.</p>
                    <a class="btn btn-primary" href="#">Read More <span
                            class="glyphicon glyphicon-chevron-right"></span></a>
                </div>

            </div>
            <hr>


            <h3>
                <a href="#">Blog Post Title</a>
            </h3>
            <p class="lead">
                by <a href="index.php">Start Bootstrap</a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    <a href=""><img class="img-responsive" src="./hinhanhsp/9856.jpg" alt="" text-align: center></a>
                </div>

                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora,
                        necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi
                        corrupti debitis ipsum officiis rerum.</p>
                    <a class="btn btn-primary" href="#">Read More <span
                            class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
            <hr>



            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>

        <!-- Blog Sidebar Widgets Column -->

    </div>
    <!-- /.row -->



    <!-- Footer -->


</div>


<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>