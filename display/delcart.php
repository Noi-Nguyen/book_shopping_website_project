

<?php
//Xóa theo trường hợp có masp
if (isset($_REQUEST['masp'])) {
	$masp = $_REQUEST['masp'];
	if (isset($_SESSION['cart'])) {
		unset($_SESSION['cart'][$masp]);
		header('location:?page=cart');
	}
}
//Nếu không có masp thì xóa tất cả session giỏ hàng
else {
	unset($_SESSION['cart']);
	header('location:?page=cart');
}
?>