<?php
        
    $masp=$_REQUEST['masp'];
    // Lấy dữ liệu cũ
    $q= "select * from sanpham join danhmuc on danhmuc.madm = sanpham.madm where masp=$masp";
    $rows = $db->query($q);
    $r=$rows->fetch();
    
    if($_SERVER["REQUEST_METHOD"]=='POST')
    {
        //Validate du lieu

        $madm=$_POST['slDM'];
        $tensp=$_POST['tensp'];
        $tentg=$_POST['tentg'];
        $namxb=$_POST['namxb'];
        $giaban=$_POST['giaban'];
        $sl=$_POST['sl']; 
        $km=$_POST['km'];
        $ha=$_FILES['fImg']['name'];
        $chitiet=$_POST['chitiet'];
            
            if (empty($error))
            {
            //Lay du lieu tu form
            $query = "update sanpham"
                    . " set tensp='$tensp', tentg='$tentg', namxb='$namxb', madm='$madm', hinhanh = '$ha', giaban='$giaban', giakm='$km', soluong='$sl',  mota='$chitiet'"
                    . "where masp=$masp";

            //Thuc thi cau truy van
            $count=$db->exec($query);

            // Xu ly kq:
                if($count>0)
                {
                    move_uploaded_file($_FILES['fImg']['tmp_name'], "../hinhanhsp/$ha");
                        
?>
<script>
if (confirm("Bạn đã cập nhật thành công") == true) {
    //chuyen den trang xoa
    window.location = "index.php?page=danhsachsp";
}
</script>;
<?php
				}
			}
    }
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mx-auto text-center" style="text-align:center;">Cập nhật sản phẩm</h4>
            </div>
            <div class="card-body form-control text-center" style="padding-left: 50px;">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                    <div class="mb-3 row pt-2">
                        <label class="col-sm-2 col-form-label">Danh mục</label>
                        <div class="col-sm-3">
                            <select class="form-select" name="slDM" required="">
                                <option value="0">-- Chọn danh mục --</option>

                                <?php
                                    $query = "select madm, tendm from danhmuc order by tendm asc";
                                    $rows=$db->query($query);
                                        foreach ($rows as $r1) 
                                        {
                                        echo "<option value='$r1[0]'";
                                        if($r1[0]=$r[1])
                                        echo 'selected';
                                        echo ">$r1[1]</option>";
                                        }
                                    ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Tên sản phẩm</label>
                        <div class="col-sm-6">
                            <input type="text" name="tensp" class="form-control form-control-sm" required=""
                                value="<?php if(isset($r)) echo $r[2]; ?>" />
                            <span class="errors">

                            </span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Tác giả</label>
                        <div class="col-sm-5">
                            <input type="text" name="tentg" class="form-control form-control-sm" required=""
                                value="<?php if(isset($r)) echo $r[6]; ?>" />
                            <span class="errors">

                            </span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" name="namxb">Năm xuất bản</label>
                        <div class="col-sm-2">

                            <input type="text" class="form-control form-control-sm" name="namxb" required=""
                                value="<?php if(isset($r)) echo $r[7]; ?>" />

                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="basicinput">Giá bán</label>
                        <div class="col-sm-2">
                                <input type="text" class="form-control form-control-sm" name="giaban" required=""
                                    value="<?php if(isset($r)) echo number_format ($r[3]); ?>">
                        </div>
                        <div class="col-auto py-7 text-left col-form-label">VNĐ</div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="basicinput">Khuyến mãi</label>
                        <div class="col-sm-2">
                            <div class="input-append">
                                <input type="text" class="form-control form-control-sm" name="km"
                                    value="<?php if(isset($r)) echo number_format ($r[4]); ?>">
                            </div>
                        </div>
                        <span class="col-auto py-7 text-left col-form-label">VNĐ</span>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="basicinput">Số lượng</label>
                        <div class="col-sm-2">

                            <input type="text" class="form-control form-control-sm" name="sl" required=""
                                value="<?php if(isset($r)) echo $r[8]; ?>" />

                        </div>
                    </div>
                    <img src="../hinhanhsp/<?php echo $r['hinhanh']?>"> 
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Hình ảnh</label>
                        <div class="col-sm-3">
                            <input type="file" name="fImg" />
                    </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Chi tiết</label>
                <div class="col-sm-10">
                    <textarea name="chitiet" class="ckeditor"><?php if(isset($r)) echo $r[9]; ?></textarea>
                </div>
            </div>

            <div class="mb-3 row">
                <div class="controls">
                    <button type="submit" class="btn btn-dark text-light">Cập nhật</button>
                </div>
            </div>
            </form>
    </div>
</div>
</div>