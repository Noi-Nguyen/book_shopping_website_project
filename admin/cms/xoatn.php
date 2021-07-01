<?php
     $ma=$_REQUEST['maph'];
     $query= "DELETE from phanhoi where maph=$ma";
     $count=$db->exec($query);
     if ($count>0) {
         header("location:index.php?page=tinnhan");
     }
?>