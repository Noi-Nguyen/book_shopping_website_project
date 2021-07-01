<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php  
			
$connect = mysqli_connect("localhost", "root", "", "bookstore");
$connect->query("set names utf8");
$output = '';

if(isset($_POST["export"]))
{
 $query = "select * from dhchitiet JOIN donhang ON donhang.madh = dhchitiet.madh";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
    <tr>  
       <th>Mã đơn hàng</th>  
       <th>Mã khách hàng</th>  
       <th>Mã sản phẩm</th>  
       <th>số lượng</th>
       <th>đơn giá</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
       <td>'.$row["madh"].'</td>  
       <td>'.$row["masp"].'</td>  
       <td>'.$row["makh"].'</td>  
       <td>'.$row["soluong"].'</td>  
       <td>'.$row["dongia"].'</td>
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;

 }
}
?>