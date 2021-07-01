<script>
function check(masp) {
    if (confirm("Bạn có muốn xóa sản phẩm này không ?") == true) {
        //chuyen den trang xoa
        window.location = "index.php?page=xoasp&masp=" + masp;
    }
}
</script>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mx-auto text-center" style="text-align:center;">Quản lý đầu sách</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table cellpadding="0" cellspacing="0" border="0" class="table align-center table-striped text-dark ad__table " id="ad__table">
                    <thead>
                        <tr>
                            <th>
                                Mã sách
                            </th>
                            <th>
                                Tên sách
                            </th>
                            <th>
                                Thể loại
                            </th>
                            <th>
                                Giá bán
                            </th>
                            <th>
                                Số lượng
                            </th>
                            <th>
                                Hình ảnh
                            </th>
                            <th>
                                Chi tiết sách
                            </th>
                            <th>
                                Công cụ
                            </th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "select * from sanpham join danhmuc on sanpham.madm=danhmuc.madm order by sanpham.madm desc";
                            $rows=$db->query($query);
                            foreach($rows as $r) 
                            {                
                                echo "<tr>"
                                        . "<td>$r[0]</td>"
                                        . "<td>$r[2]</td>"
                                        . "<td>$r[12]</td>"
                                        . "<td>".number_format($r[3])."</td>"
                                        . "<td>".$r['soluong']."</td>"
                                        . "<td><img src='../hinhanhsp/$r[5]' width='100px'/></td>"
                                        . "<td>".substr($r[9], 0, 150 )."...</td>"             
                                        . "<td>"
                                        . "<a href='index.php?page=suasp&masp=$r[0]' title='Sửa'><i class='fa fa-pencil-square-o fa-lg'> </i></a> "
                                        ."<a onclick='check($r[0])' href='#' title='Delete'><i class='fa fa-trash-o fa-lg'> </i></a>"
                                        . "</td>"
                                        . "</tr>";

                            }
                            ?>
                    </tbody>
                    <!--    <tfoot>
                            <tr>
                                <th>
                                    Tên sách
                                </th>
                                <th>
                                    Thể loại
                                </th>
                                    <th>
                                    Giá bán
                                </th>
                                <th>
                                    Khuyến mãi
                                </th>
                                <th>
                                        Hình ảnh
                                </th>
                                <th>
                                    Chi tiết
                                </th>
                                <th>
                                    Công cụ
                                </th>
                            </tr>
                        </tfoot> -->
                </table>
                <a href="index.php?page=themsp" ><button type="submit" class="btn btn-dark text-light">Thêm sách mới</button></a>
                </div>

            </div>
        </div>
    </div>
</div>