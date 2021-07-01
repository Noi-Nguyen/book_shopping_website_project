<script>
function check(matt) {
    if (confirm("Bạn có muốn xóa tin tức này không ?") == true) {
        //chuyen den trang xoa
        window.location = "index.php?page=xoatt&matt=" + matt;
    }
}
</script>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mx-auto text-center" style="text-align:center;">Quản lý tin tức</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table cellpadding="0" cellspacing="0" border="0" class="table align-center table-striped text-dark ad__table " id="ad__table">
                        <thead>
                            <tr>
                                <th>
                                    Tiêu đề
                                </th>


                                <th>
                                    Ảnh nền
                                </th>
                                <th>
                                    Nội dung
                                </th>
                                <th>
                                    Ngày tạo
                                </th>
                                <th>
                                    Công cụ
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                            $query = "select * from tintuc order by matt desc";
                    
                                            $rows=$db->query($query);
                                            foreach($rows as $r) 
                                            {                
                                                echo "<tr>"
                                                    
                                            . "<td>$r[1]</td>"
                                            
                                            . "<td><img src='../hinhanhsp/$r[2]' width='100px'/></td>"
                                            . "<td>".substr($r[3], 0, 400 )."...</td>"
                                            . "<td>$r[4]</td>"
                                            
                                            . "<td>"
                                            . "<a href='index.php?page=suatintuc&matt=$r[0]' title='Edit'><i class='fa fa-pencil-square-o fa-lg'> </i></a> "

                                            ."<a onclick='check($r[0])' href='#' title='Delete'><i class='fa fa-trash-o fa-lg'> </i></a>"
                                            . "</td>"
                                        . "</tr>";

                                        }
                                        ?>
                        </tbody>

                    </table>
                    <a href='index.php?page=themtintuc'><button type='submit' class='btn btn-dark text-light'>Thêm mới</button></a>
                </div>
            </div>

        </div>
    </div>
</div>