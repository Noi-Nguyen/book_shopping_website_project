
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mx-auto text-center" style="text-align:center;">Quản lý đơn hàng</h4>
            </div>
            <div class="card-body">	  
				<div class="row g-3  " style ="text-align: center; padding-top: 10px;" >    
					<form method="post">
						<div style="display: inline-block;" class="mx-auto"> 
							<select class="form-control m-1" name="month" style="width: 64px;">
								<option value="0" >Chọn tháng</option>
								<option value="1" >1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
								<option value="6" >6</option>
								<option value="7" >7</option>
								<option value="8" >8</option>
								<option value="9" >9</option>
								<option value="10" >10</option>
								<option value="11" >11</option>
								<option value="12" >12</option>								
							</select>
							
							<select class="form-control m-1" name="year" style="width: 64px;">
								<option value="0" >Chọn Năm</option>
								<option value="2021" >2021</option>
								<option value="2020" >2020</option>
								<option value="2019" >2019</option>
								<option value="2018" >2018</option>
								<option value="2017" >2017</option>
								<option value="2016" >2016</option>
														
							</select>
							
							
							
							<input type="submit" class="btn btn-primary form-control" style="width: 64px;" value="Xem">
					
						</div>					
					</form>
				</div>
					</div>
					
					
					<?php
							$query = "select * from dhchitiet JOIN donhang ON donhang.madh = dhchitiet.madh" ;
							if($_SERVER["REQUEST_METHOD"]=="POST")
							{
								if($_POST['month']== 0 && $_POST['year']!= 0  ){
									$query.=" and  EXTRACT(year FROM ngaytao) =" . $_POST['year'];
								
								}else
								{
									$query.=" and  EXTRACT(month FROM ngaytao) =" . $_POST['month'] . " and  EXTRACT(year FROM ngaytao) =" . $_POST['year'];
								}
										$rows=$db->query($query);
										echo "<div class='table-responsive'>";
										echo "<table cellpadding='0' cellspacing='0' border='0' class='table text-dark ad__table ' >";
										echo "<thead>";
										echo "<tr>"
												. "<th class='text-center'>Mã đơn hàng</th>"
												. "<th class='text-center'>Mã khách hàng</th>"
												. "<th class='text-center'>Mã sản phẩm</th>"
												. "<th class='text-center'>Số lượng</th>"
												. "<th class='text-center'>Đơn giá</th>"
												. "<th class='text-center'>Thành tiền</th>"
												. "<th class='text-center'>Năm</th>"									
											. "</tr>";
											echo "</thead>";
											echo "<tbody>"; 
										$total=0;
										$id=0;
										foreach($rows as $r) 
										{        
											$id++;
											$t1= $r['soluong']*$r['dongia'];
											$total+=$t1; 
									
											echo "<tr>"
											."<td class='text-center'>$r[madh]</td>"
											. "<td class='text-center'>". $r['makh']."</td>"
											."<td class='text-center'>$r[masp]</td>"
											. "<td class='text-center'>". $r['soluong']."</td>"
											. "<td class='text-center'>". number_format($r['dongia'])."</td>"
											. "<td class='text-center'>". number_format($t1)."</td>"
											. "<td class='text-center'>". $r['ngaytao']."</td>"
											. "</tr>";

										}	
										echo "</tbody>"; 
										
										echo "</table>";
										echo "<h3 style='text-align: right;margin-right: 80px;'>Tổng tiền: ". number_format($total) . " đ</h3>";
										?>
										
									
							<form method="post" action="./export.php">
								<input type="submit" name="export" class="btn btn-primary ms-3" value="Export" />
							</form>
							
						
									<?php
										echo "</div>";
							}
										?>
		</div>
	</div>
</div>