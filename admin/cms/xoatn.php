<?php
     $maph=$_REQUEST['maph'];
     $query= "DELETE from phanhoi where maph=$maph";
     $count=$db->exec($query);
     if ($count>0) {
         header("location:index.php?page=tinnhan");
     }
?>
