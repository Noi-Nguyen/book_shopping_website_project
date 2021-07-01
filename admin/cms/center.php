
<div class="row">
      <!-- card component -->
      <!-- card Tin tức -->
      <div class="card border-dark mb-3 text-dark ad__card col-md-4" >
         <div class="card-header bg-transparent border-dark"><i class="bi bi-cart3 fa-5x"></i></div>
         <div class="card-body text-dark">
            <a href="?page=order" class="card-title text-dark">
               <b>    
                 <?php
                    $q = "select count(*) from donhang";
                         $rs = $db->query($q);
                          $dh = $rs->fetch()[0]; 
                          echo $dh;
                  ?></b>
               <p class="card-text">
                  Đơn hàng
               </p>
            </a>
         </div>
      </div>


      <div class="card border-dark mb-3 text-dark ad__card col-md-3" >
         <div class="card-header bg-transparent border-dark"><i class="bi bi-people fa-5x"></i></div>
         <div class="card-body text-dark">
            <a href="?page=thanhvien" class="btn-box big span4 text-dark">
               <b class="card-text">  
               <?php
                  $q1 = "select count(*) from khachhang";
                     $rs1 = $db->query($q1);
                        $kh = $rs1->fetch()[0]; 
                        echo $kh;
                  ?>
               </b>               
               <p class="card-title">               
                  Thành viên
               </p>
            </a>
         </div>
      </div>


      <div class="card border-dark mb-3 text-dark ad__card col-md-4" >
         <div class="card-header bg-transparent border-dark"><i class="bi bi-book fa-5x"></i></div>
         <div class="card-body text-dark">
            <a href="?page=danhsachsp" class="btn-box big text-dark">
               <b>
                  <?php
                  $q2 = "select count(*) from sanpham";
                       $rs2 = $db->query($q2);
                        $sp = $rs2->fetch()[0]; 
                        echo $sp;
                  ?></b>
               <p class="card-title">
                  Sản phẩm
               </p>
            </a>
         </div>
      </div>

      
      <div class="card border-dark mb-3 text-dark ad__card col-md-4" >
         <div class="card-header bg-transparent border-dark"><i class="bi bi-chat-dots fa-5x"></i></div>
         <div class="card-body text-dark">
            <a href="?page=tinnhan" class="btn-box big text-dark">
               <b>    
                  <?php
                  $q = "select count(*) from phanhoi";
                       $rs = $db->query($q);
                        $tn = $rs->fetch()[0]; 
                        echo $tn;
                  ?></b>
               <p class="card-title">
                  Tin nhắn
               </p>
            </a>
         </div>
      </div>


      <div class="card border-dark mb-3 text-dark ad__card col-md-3" >
         <div class="card-header bg-transparent border-dark"><i class="bi bi-newspaper fa-5x"></i></div>
         <div class="card-body text-dark">
              <a href="?page=danhsachtintuc" class="btn-box big text-dark">
                  <b>    
                     <?php
                     $q = "select count(*) from tintuc";
                        $rs = $db->query($q);
                           $tn = $rs->fetch()[0]; 
                           echo $tn;
                     ?></b>
                  <p class="card-title">
                     Tin tức
                  </p>
               </a>
         </div>
      </div>


      <div class="card border-dark mb-3 text-dark ad__card col-sm-4" >
         <div class="card-header bg-transparent border-dark"><i class="bi bi-tag-fill fa-5x"></i></div>
         <div class="card-body text-dark">
               <a href="?page=danhsachdm" class="btn-box big text-dark">
                  <b >    
                     <?php
                     $q = "select count(*) from danhmuc";
                        $rs = $db->query($q);
                           $tn = $rs->fetch()[0]; 
                           echo $tn;
                     ?></b>
                  <p class="card-title">
                     Danh mục
                  </p>
               </a>
         </div>
      </div>


      <div class="card border-dark mb-3 text-dark ad__card col-md-4" >
         <div class="card-header bg-transparent border-dark"><i class="bi bi-clipboard-data fa-5x"></i></div>
         <div class="card-body text-dark">
			  <a href="?page=Report" class="btn-box big text-dark" style="margin-left: 0px;">
             
               <p class="card-title">
                  Báo cáo
               </p>
            </a>
         </div>
      </div>
</div>

         <!-- <div class="btn-box-row row-fluid">
            <div class="span8">
               <div class="row-fluid">
               </div>
            </div>
         </div>
      </div>
      <?php
         ?>
   </div>
</div> -->