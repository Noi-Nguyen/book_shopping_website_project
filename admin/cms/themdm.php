
<?php
                        if($_SERVER["REQUEST_METHOD"]=='POST')
                        {
                            
                                $tendm=$_POST['TenDM']; 
                                $query = "SELECT tendm FROM danhmuc WHERE tendm = :tendm";
                                $stmt = $db->prepare($query); // chuẩn bị câu truy vấn để tránh lỗi
                                $stmt -> bindValue(':tendm', $tendm);
                                
                                $stmt->execute();// thực hiện câu truy vấn

                                $user = $stmt->fetch(PDO::FETCH_ASSOC); //giá trị trả về

                                if ($user) {
                                   $error = "Danh mục đã tồn tại!" ;
                                }else{

                                $query= "insert into danhmuc(tendm)"."values('$tendm')";
                                $dem=$db->exec($query);
                                
                                
                             
                            
                            
                        }}
                    ?>
 
 <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mx-auto text-center">Thêm danh mục</h4>
            </div>
            <div class="card-body form-control text-center " style="padding-left: 50px;">
                <form action="" method="post" class=" row g-3">
                    <div class="mb-3 row pt-2">
                        <label class="col-sm-5 col-form-label" for="TenDM">Tên danh mục</label>
                        <div class="col-sm-5">
                                <input type="text" name="TenDM" class="form-control form-control-sm" required="" value="<?php if(isset($r)) echo $r[1]; ?>"/>
                                    <?php if (isset($error)) { ?>
                                       
                                         <script type="text/javascript">
                                       
                                                if(confirm("Danh mục đã tồn tại")==true)
                                          {
                                    //chuyen den trang xoa
                                               window.location="index.php?page=themdm";
                                            }                                
                                        </script>;
                                            
                                      
                                     <?php } ?>
                                        <span class="errors">
                                        <?php
                                            // if(!empty($error) && in_array('tendm', $error))
                                            // {
                                            //     echo "Mời nhập tên danh mục !";
                                            // }
                                        ?>
                                         </span>
                                         </div>
                    </div>     
                    <div class="control-group row g-3 text-center" >
                        <div class="controls">
                            <button type="submit" class="btn btn-dark text-light" check>Thêm danh mục</button>
                                <?php if (isset($dem)) {?>

                                     <script type="text/javascript">
                                       
                                                if(confirm("Bạn đã thêm danh mục thành công")==true)
                                          {
                                    //chuyen den trang xoa
                                               window.location="index.php?page=danhsachdm";
                                            }                                
                                        </script>;
                                            
                                            
                                
                              <?php  } ?>   
                              </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>

