
 <?php
        
            $ma=$_REQUEST['ma'];
           //3. Lấy dữ liệu cũ
            $q= "select * from danhmuc where MaDM=$ma";
            $rows = $db->query($q);
            $r=$rows->fetch();
            
        if($_SERVER["REQUEST_METHOD"]=='POST')
        {
            //Validate du lieu
            $tendm=$_POST['TenDM']; 
                            
             $query = "update danhmuc"
                      . " set tendm='$tendm'"
                       . " where madm=$ma";
            $count=$db->exec($query);
            if($count>0)
            {
                       
                      
                        ?>
                      <script>
                        if(confirm("Sửa danh mục thành công")==true)
                          {
                    
                               window.location="index.php?page=danhsachdm";
                            }                                
                        </script>;
                       <?php 
                     }
        }   
        ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mx-auto text-center">Cập nhật danh mục</h4>
            </div>
                <form action="" method="post" class=" row g-3">
                    <div class="mb-3 row pt-2">
                        <label class="col-sm-5 col-form-label" for="TenDM">Tên danh mục</label>
                        <div class="col-sm-5">
                                <input type="text" name="TenDM" class="form-control form-control-sm" required="" value="<?php if(isset($r)) echo $r[1]; ?>"/>
                        </div>
                    </div>     
                    <div class="control-group row g-3 text-center" >
                        <div class="controls">
                            <button type="submit" class="btn btn-dark text-light" check>Cập nhật danh mục</button>
                        </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
         