<script>
function check(maph) {
    if (confirm("Bạn có muốn xóa tin nhắn này không ?") == true) {
        //chuyen den trang xoa
        window.location = "index.php?page=xoatn&maph=" + maph;
    }
}
</script>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mx-auto text-center" style="text-align:center;">Danh sách tin nhắn</h4>
            </div>
            <div class="card-body">
            <?php
                $query = "select * from phanhoi order by maph desc";
                $rows=$db->query($query);

                echo "<table class='table'>";
                echo "<tr>"
                        . "<th>Họ tên</th>"
                        . "<th>Email</th>"
                        . "<th>Ngày</th>"
                        . "<th>Nội dung</th>"
                        . "<th class='aa'>Công cụ</th>"
                        . "</tr>";
                foreach($rows as $r) 
                {                
                    echo "<tr>"
                            . "<td>$r[1]</td>"
                            . "<td>$r[2]</td>"
                            . "<td>$r[3]</td>"
                                . "<td>$r[4]</td>"
                                . "<td>"
                                ."<a  onclick='check($r[0])' href='#' title='Delete'><i class='fa fa-trash-o'> </i></a>"
                            . "</td>"
                            . "</tr>";

                }

                echo "</table>";

                ?>
            </div>

        </div>
    </div>
</div>