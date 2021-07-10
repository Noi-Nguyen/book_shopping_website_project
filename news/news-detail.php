<?php
    $matt = $_REQUEST['matt'];
    $query="SELECT * FROM tintuc where matt=".$matt;
    $rows = $db->query($query);
    $r=$rows->fetch();
?>
<div class="container">
    <ol class="breadcrumb bread">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active">Tin tức</li>
    </ol>

    <div class="row">
        <div class="col-md-10 ">
            <div class="article-news-detail" style="background-color:white;">
                <h1> <?php echo $r['tieude']?> </h1>
                <p class="hr-news"><span class="fa fa-clock-o "></span> <time
                        datetime="<?php echo $r['ngaytao']?>"><?php echo $r['ngaytao']?></time></p>
                <p> <?php echo $r['noidung']?> </p>
            </div>
        </div>
    </div>

    <div class="newsss container">
        <div class="news-list">
            <h4 class="box-tittle title-cate">
                <a href="index.php?page=news">Tin tức mới nhất</a></h4>
            <div class="post-new">
                <div class="row">
                    <?php
                      $query="SELECT * FROM tintuc ORDER BY matt DESC LIMIT 4";
                              // . " limit $start, $n";
                      $rows=$db->query($query);
                      // $a = $rows->fetch(PDO::FETCH_ASSOC);
                      // echo implode("<br>",$a);
                      foreach ($rows as $r){   
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
                                    if (strlen($r['tieude']) > 44){
                                        echo substr($r['tieude'],0,42) . "...";
                                    
                                    }else{
                                    echo $r['tieude'];
                                    }
                                ?>
                            </a>
                        </h4>
                        <p class="hr-news"><span class="fa fa-clock-o "></span> <time
                                datetime="<?php echo $r['ngaytao']?>"><?php echo $r['ngaytao']?></time>
                        </p>
                        <p><?php echo substr($r['noidung'],0,300)?>...</p>
                        <a href="index.php?page=news-detail&matt=<?php echo $r['matt'] ?>" class="read-more">
                            Read
                            more</a>
                    </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>

</div>