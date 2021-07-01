<?php
     
     $masp=$_REQUEST['masp'];
     $query= "DELETE from sanpham where masp=$masp";
     $count=$db->exec($query);
     if($count>0) { ?>
<script>
if (confirm("Bạn đã xóa sản phẩm thành công") == true) {
    //chuyen den trang xoa
    window.location = "index.php?page=danhsachsp";
}
</script>;
<?php
         // header("location:index.php?page=dssp");}
} 
?>