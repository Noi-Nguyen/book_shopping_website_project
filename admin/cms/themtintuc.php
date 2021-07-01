 <?php
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        
            $tieude=$_POST['tieude']; 
            $anhnen=$_FILES['fImg']['anhnen'];
            $noidung=$_POST['noidung'];
               
            $query = "INSERT INTO tintuc(tieude,anhnen,noidung, ngaytao) VALUES('$tieude', '$anhnen', '$noidung', now())";
            $count=$db->exec($query);
            if($count>0)
            {
                move_uploaded_file($_FILES['fImg']['tmp_name'], "../hinhanhsp/$anhnen");
            ?>
            <script>
                if (confirm("Bạn đã thêm tin tức thành công") == true) {
                    //chuyen den trang xoa
                    window.location = "index.php?page=danhsachtintuc";
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
                <h4 class="mx-auto text-center" style="text-align:center;">Thêm tin tức</h4>
            </div>
            <div class="card-body form-control text-center" style="padding-left: 50px;">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">
                    <div class="mb-3 row pt-3">
                        <label class="col-sm-2 col-form-label">Tiêu đề </label>
                        <div class="col-sm-5">
                            <input type="text" name="tieude" class="form-control form-control-sm" required=""
                                value="<?php if(isset($tieude)) echo $tieude ?>" />

                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="fImg"> Ảnh nền </label>
                        <div class="col-sm-3">
                            <input type="file" name="fImg" required="" />
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label"> Nội dung</label>
                        <div class="col-sm-10">
                            <textarea name="noidung" class="ckeditor"></textarea>
                        </div>
                    </div>

                    <div class="control-group py-3">
                        <div class="controls">
                            <button type="submit" class="btn btn-dark text-light">Thêm mới</button>
                        </div>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</div>