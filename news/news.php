<div class="container list-article">

    <!-- <h1 class="hr-news"> News</h1> -->
   <ol class="breadcrumb bread">
      <li><a href="index.php">Trang chủ</a></li>
      <li class="active">Tin tức</li>

   </ol>
   <div class="row">
      <div class="col-xs-10 article-wrapper-news" style="background-color:white;">
         <?php
            $query = "SELECT count(*) FROM tintuc";
            $rs = $db->query($query);
            $tong = $rs->fetch(PDO::FETCH_ASSOC);  
            $limit=4;
            $sotrang = ceil(implode($tong)/$limit);//  hàm làm tròn, đổi mảng thành chuỗi

            if(isset($_REQUEST['pages']) && (int)$_REQUEST['pages']>0)
            {
               $p=$_REQUEST['pages'];
               $start=($p-1)*$limit;
            }
            else
            {
               $p=1;
               $start=0;
            }
 
            $query="SELECT * FROM tintuc ORDER BY matt DESC LIMIT $start,$limit";
                  // . " limit $start, $n";
            $rows=$db->query($query);
            // $a = $rows->fetch(PDO::FETCH_ASSOC);
            // echo implode("<br>",$a);
            foreach ($rows as $r)
            {   
               ?>
               <article class="article-news">
                     <a href="index.php?page=news-detail&matt=<?php echo $r['matt']?>" ></a>
                     <div class="img-wrapper-news"> <img src="./hinhanhsp/<?php echo $r['anhnen']?>" alt="" /> </div>
                     <h3> <?php echo $r['tieude']?> </h3>
                     <p class="hr-news"><span class="fa fa-clock-o "></span> <time
                           datetime="<?php echo $r['ngaytao']?>"><?php echo $r['ngaytao']?></time></p>
                     <p><?php echo substr($r['noidung'],0,300)?>...</p>
               </article>

            <?php } ?>





            <div class="row pagination-container">
                <div class="pagination">

                    <ul class="hh">

                        <?php
              for ($i=1;$i<=$sotrang;$i++)
              {
                 echo "<li class='active aa'>";
                 echo "<a href='index.php?page=news&pages=$i'> $i </a>";
                 echo   "</li>";
              }
             
           ?>

                        <!-- <li class="aa"><a  href="#">PREV</a></li>
          <li class="aa"><a class="pagination-active" href="#">1</a></li>
          <li class="aa"><a  href="#">2</a></li>
          <li class="aa"><a href="#">3</a></li>
          <li class="aa"> <a href="#">4</a></li>
          <li class="aa"><a href="#">5</a></li>
        <li class="aa"> <a href="#">6</a></li>
        <li class="aa"><a  href="#">NEXT</a></li> -->
                    </ul>

                </div>
            </div>


        </div>
    </div>

</div>