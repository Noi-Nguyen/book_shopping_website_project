<div class="col-md-3 " style="margin-top: 10px;">
    <div class="well" style="background-color:white;">
        <h3 class="hr-news" style="color: black">Xem theo</h3>
        <ul class="list-unstyled ">
            <?php
            $dsdm = 'select * from danhmuc group by tendm';
            $dong = $db->query($dsdm);
            // $a= $dong->fetchAll(PDO::FETCH_ASSOC);
            // echo implode("/", $a);
            //print_r($a);
            foreach ($dong as $d) {
            ?>

                <!-- // echo "<li class='right'>";
                                    //  echo "<a href='index.php?page=product&madm= ". $d['madm']."'>" . $d['tendm']. "</a>";
                                    //  echo   "</li>"; -->

                <li class="right">
                    <a href="index.php?page=product&madm=<?php echo $d['madm']; ?> "> <?php echo $d['tendm'] ?>
                    </a>
                </li>
            <?php

            }
            ?>
        </ul>
    </div>
</div>

<!--    <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
          
                    /.row -->