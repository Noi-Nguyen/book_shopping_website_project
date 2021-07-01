<!-- <?php
    if($_SERVER["REQUEST_METHOD"]=='POST')
    {
        $sl=$_POST['sldh'];
    }
?> -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mx-auto text-center" style="text-align:center;">Quản lý đơn hàng</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table cellpadding="0" cellspacing="0" border="0" class="table align-center table-striped text-dark ad__table " id="ad__table">
                        <thead>
                            <tr>
                                <th>
                                    Mã đơn hàng
                                </th>
                                <th>
                                    Tên khách hàng
                                </th>
                                <th>
                                    Ngày đặt hàng
                                </th>
                                <th>
                                    Thông tin
                                </th>
                                <th>
                                    Ghi chú
                                </th>
                                <th>
                                    Trạng thái
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "select madh, full_name, donhang.ngaytao, ghichu, donhang.trangthai, donhang.makh from donhang join khachhang on "
                                        . "donhang.makh=khachhang.makh order by madh desc";
                
                                $rows=$db->query($query);
                                
                                foreach($rows as $r) 
                                {   
                                    if($r['trangthai'] == 1) 
                                        $tb = "Đã giao hàng";
                                    else   $tb = "Chưa giao hàng"; 
                                        echo "<tr>"
                                            . "<td>$r[0]</td>"
                                                . "<td><a href='?page=orderkh&makh=".$r[5]."'>$r[1]</a></td>"
                                                . "<td>$r[2]</td>"
                                                . "<td><a href='?page=orderdt&madh=".$r[0]."&makh=".$r[5]."'>Xem chi tiết</a></td>"
                                                . "<td>".substr($r[3],0,100)."...</td>"
                                                
                                                . "<td>";
                            ?>
                             <!-- <select name="sldh">
                                                    <option <?php if($r[4]==0) echo "selected"?> value=0>Chưa giao hàng</option>
                                                    <option <?php if($r[4]==1) echo "selected"?> value=1>Đã giao hàng đầy đủ</option>
                                                    <option <?php if($r[4]==2) echo "selected"?> value=2>Giao còn thiếu</option>
                                              </select>             -->
                            <div class="input-append ">
                                <span class="add-on"><?php echo $tb; ?></span>
                            </div>
                            </td>
                            </tr>
                            <?php
                                        }
                                     ?>
                        </tbody>

                    </table>
                    <a href=""><button type='submit' class='btn btn-dark text-light'>Cập nhật</button></a>
                </form>
            </div>


        </div>
    </div>
</div>