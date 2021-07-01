<?php
		try{
		$db=new PDO("mysql:host=localhost;dbname=bookstore", 'root','');
        $db->query("set names utf8");
       

		}catch(PDOException $se ){
			echo $se->getMessage();
			exit();
		}
//$db = mysql_connect("localhost","root",""); // đăng nhập vào CSDL trên máy tính
//$db= mysql_select_db("bookstore");
?>



