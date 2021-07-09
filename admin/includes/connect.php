<?php
try {
	$options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];
	$db = new PDO("mysql:host=localhost;dbname=bookstore", 'root', '', $options);
	$db->query("set names utf8");
} catch (PDOException $se) {
	echo $se->getMessage();
	exit();
}
//$db = mysql_connect("localhost","root",""); // đăng nhập vào CSDL trên máy tính
//$db= mysql_select_db("bookstore");
