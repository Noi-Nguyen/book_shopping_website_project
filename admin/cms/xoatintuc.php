<?php
    $matt=$_REQUEST['matt'];
    $query = "DELETE FROM tintuc WHERE matt = $matt";
    //3. Thuc thi
    $count=$db->exec($query);
    if($count>0)
    {	
        header("location:index.php?page=danhsachtintuc");
    }
?>

