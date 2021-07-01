<script>
function check(makh) {
    if (confirm("Bạn có muốn xóa danh mục này không ?") == true) {
        //chuyen den trang xoa
        window.location = "index.php?page=xoakh&makh=" + makh;
    }
}
</script>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mx-auto text-center" style="text-align:center;">Quản lý thành viên</h4>
            </div>
            <div class="card-body">

              <?php
                  $query = "select * from khachhang order by makh desc ";
                  $rows=$db->query($query);
                    echo "<div class='table-responsive'>";
                  echo "<table cellpadding='0' cellspacing='0' border='0' class='table table-striped text-dark ad__table ' id = 'ad__table'>";
                  echo "<thead>";
                  
                  echo "<tr>"
                          . "<th>Họ tên</th>"
                          . "<th>Email</th>"
                          . "<th>Địa chỉ</th>"
                          . "<th>Số điện thoại</th>"
                          . "<th>Ngày tạo</th>"
                          . "<th class='aa'>Công cụ</th>"
                        . "</tr>";
                        echo "</thead>";
                        echo "<tbody>"; 
                  foreach($rows as $r) 
                  {                
                      echo "<tr>"
                              . "<td><a href='?page=orderkh&makh=".$r[0]."'>$r[4]</a></td>"
                              . "<td>$r[3]</td>"
                              . "<td>$r[5]</td>"
                              . "<td>$r[6]</td>"
                              . "<td>$r[7]</td>"
                              . "<td>"
                                . "<a href='index.php?page=suakh&makh=$r[0]' title='Edit'><i class='fa fa-pencil-square-o fa-lg'> </i></a> "
                                ."<a onclick='check($r[0])' href='#' title='Delete'><i class='fa fa-trash-o fa-lg'> </i></a>"
                              . "</td>"
                            . "</tr>";

                  }
              echo "</tbody>"; 
                  echo "</table>";

              ?>
              <a href='index.php?page=themkh'><button type='submit' class='btn btn-dark text-light'>Thêm mới</button></a>

            </div>
        </div>
    </div>
</div>
</div>