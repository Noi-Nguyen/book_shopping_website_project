<?php 
	
	$makh = $_REQUEST['makh'];
	$query = "DELETE from khachhang where makh = $makh";
	$count = $db->exec($query);
	if($count>0)
    {	
        header("location:index.php?page=thanhvien");
    }


 ?>