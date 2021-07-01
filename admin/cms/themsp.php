<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        
        $madm=$_POST['slDM'];
        $tensp=$_POST['tensp']; 
        $tentg=$_POST['tentg']; 
        $namxb=$_POST['namxb'];  
        $giaban=$_POST['giaban'];
        $sl=$_POST['sl']; 
        $km=$_POST['km'];
        $ha=$_FILES['fImg']['name'];
        $chitiet=$_POST['chitiet'];            
        $query = "insert into sanpham(tensp, tentg, namxb ,madm , giaban, giakm, soluong, hinhanh, mota) values('$tensp', '$tentg', '$namxb', '$madm', $giaban, $km, '$sl', '$ha', '$chitiet')";
        $count=$db->exec($query);
        if($count>0)
        {
            move_uploaded_file($_FILES['fImg']['tmp_name'], "../hinhanhsp/$ha");
        }
?>
<script>
    if (confirm("Bạn đã thêm sản phầm thành công") == true) {
        //chuyen den trang xoa
        window.location = "index.php?page=danhsachsp";
    }
</script>;
<?php
    }
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mx-auto text-center" style="text-align:center;">Thêm mới đầu sách</h4>
            </div>
            <div class="card-body form-control text-center" style="padding-left: 50px;">
                <form action="" method="post" enctype="multipart/form-data" class=" form-horizontal row g-3">
                    <div class=" mb-3 row pt-2 ">
                        <label class="col-sm-2 col-form-label " for="slDM">Danh mục</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="slDM" required="">
                                <option value="no">-- Chọn danh mục --</option>

                                <?php
                                    $query = "select madm, tendm from danhmuc order by tendm asc";
                                    $rows=$db->query($query);
                                        foreach ($rows as $r) 
                                        {
                                            echo "<option value='$r[0]'>$r[1]</option>";
                                        }
                                ?>
                            </select>
                            <span class="errors">
                                <?php
                                    // if(!empty($error) && in_array('dm', $error))
                                    // {
                                    //     echo "Mời chọn danh mục !";
                                    // }
                                ?>
                            </span>
                        </div>
                    </div>
                    <div></div>
                    <div class="mb-3 row">
                        <label class=" col-sm-2 col-form-label" for="tensp">Tên sản phẩm</label>
                        <div class="col-sm-6">
                            <input type="text" name="tensp" class=" form-control form-control-sm   " required="" />
                            <span class="errors">
                                <?php
                                    // if(!empty($error) && in_array('tensp', $error))
                                    // {
                                    //     echo "Mời nhập tên sản phẩm !";
                                    // }
                                ?>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Tác giả</label>
                        <div class="col-sm-5">
                            <input type="text" name="tentg" class="form-control form-control-sm" required="" />
                            <span class="errors">
                                <?php
                                    // if(!empty($error) && in_array('tentg', $error))
                                    // {
                                    //     echo "Mời nhập tên tác giả !";
                                    //}
                                ?>
                            </span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="basicinput">Năm xuất bản</label>
                        <div class="col-sm-2">

                            <input type="text" class="form-control form-control-sm" name="namxb" required="" />
                            <span class="errors">
                                <?php
                                    // if(!empty($error) && in_array('namxb', $error))
                                    // {
                                    //     echo "Mời nhập năm xuất bản!";
                                    // }
                                ?>
                            </span>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="basicinput">Giá bán</label>
                        <div class="col-sm-2">

                            <input type="text" class="form-control form-control-sm" name="giaban" required="" />
                            <span class="errors">
                                <?php
                                    // if(!empty($error) && in_array('giaban', $error))
                                    // {
                                    //     echo "Mời nhập giá bán!";
                                    // }
                                ?>
                            </span>
                        </div>
                        <div class="col-auto py-7 text-left col-form-label">VNĐ</div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="basicinput">Khuyến mãi</label>
                        <div class="col-sm-2">

                            <input type="text" class="form-control form-control-sm" value="0" name="km"> 

                        </div>
                        <div class="col-auto py-7 text-left col-form-label">VNĐ</div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="basicinput">Số lượng</label>
                        <div class="col-sm-2">

                            <input type="text" class="form-control form-control-sm" name="sl" required="" />


                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Hình ảnh</label>
                        <div class="col-sm-3">
                            <input type="file" name="fImg" />
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Chi tiết</label>
                        <div class="col-sm-10">
                            <textarea name="chitiet" class="ckeditor"></textarea>
                        </div>
                    </div>

                    <div class="control-group py-3 text-center">
                        <div class="controls">
                            <button type="submit" class="btn btn-dark text-light ">Thêm mới</button>                            
                            <button type="cancel" onclick="javascript:window.location='?page=dssp';" class="btn btn-dark text-light">Hủy</button>

                        </div>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</div>