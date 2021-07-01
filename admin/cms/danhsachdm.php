<script type="text/javascript">
function check(madm) {
    if (confirm("Bạn có muốn xóa danh mục này không ?") == true) {
        //chuyen den trang xoa
        window.location = "index.php?page=xoadm&madm=" + madm;
    }
}
</script>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mx-auto text-center" style="text-align:center;">Quản lý danh mục</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php
                        $query = "select * from danhmuc order by madm desc";
                        $rows=$db->query($query);
                        echo "<div class='table-responsive'>";
                        echo "<table cellpadding='0' cellspacing='0' border='0' class='table table-striped text-dark ad__table ' id = 'ad__table'>";
                        echo "<thead>";
                        echo "<tr>"
                                . "<th class='span2'>Mã danh mục</th>"
                                . "<th class='text-center'>Danh mục</th>"
                                . "<th class='aa'>Công cụ</th>"
                                . "</tr>";
                                echo "</thead>";
                                echo "<tbody>";   
                        foreach($rows as $r) 
                        {             
                        
                            echo "<tr>"
                                . "<td>$r[0]</td>"
                                    . "<td class='text-center'>". $r['tendm']."</td>"
                                    . "<td class='aa'>"
                                    . "<a href='index.php?page=suadm&ma=$r[0]' title='Edit'><i class='fa fa-pencil-square-o fa-lg'> </i></a> " 
                                    . "<a onclick='check($r[0])' href='#' title='Delete'><i class='fa fa-trash-o fa-lg'> </i></a> "
                                    . "</td>"
                                    . "</tr>";
                        }
                            echo "</tbody>"; 
                            echo "</table>";
                        
                        echo "<a href='index.php?page=themdm'><button type='submit' class='btn btn-dark text-light'>Thêm mới</button></a>";
                        
                        echo "</div>";

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>