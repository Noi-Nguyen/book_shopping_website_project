<?php
    $matt=$_REQUEST['matt'];
    // Lấy dữ liệu cũ
    $q= "select * from tintuc where matt=$matt";
    $rows = $db->query($q);
    $r=$rows->fetch();

    if($_SERVER["REQUEST_METHOD"]=='POST')
    {
        $tieude=$_POST['tieude']; 
        $anhnen=$_FILES['fImg']['name'];
        $noidung=$_POST['noidung'];
            
        //Lay du lieu tu form
        $query = "update tintuc"
                . " set tieude='$tieude', anhnen='$anhnen', noidung='$noidung'"
                . "where matt='$matt'";

            //Thuc thi cau truy van
        $count=$db->exec($query);

        // Xu ly kq:
        if($count>0)
        {
            move_uploaded_file($_FILES['fImg']['tmp_name'], "../hinhanhsp/$anhnen");
            header("location:index.php?page=danhsachtintuc");
        }
    }            
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mx-auto text-center" style="text-align:center;">Cập nhật tin tức</h4>
            </div>
            <div class="card-body form-control text-center" style="padding-left: 50px;">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal row-fluid">

                    <div class="mb-3 row pt-3">
                        <label class="col-sm-2 col-form-label">Tiêu đề </label>
                        <div class="col-sm-5">
                            <input type="text" name="tieude" class="form-control form-control-sm" required=""
                                value="<?php if(isset($r)) echo $r[1]?>" />
                        </div>
                    </div>

                    <img src="../hinhanhsp/<?php echo $r['anhnen']?>"> 
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label"> Ảnh bìa </label>
                        <div class="col-sm-3">
                            <input type="file" name="fImg" />
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label"> Nội dung</label>
                        <div class="col-sm-10">
                            <textarea name="noidung" class="ckeditor"><?php if(isset($r)) echo $r[3]?></textarea>
                        </div>
                    </div>

                    <div class="control-group py-3">
                        <div class="controls">
                            <button type="submit" class="btn btn-dark text-light">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</div>