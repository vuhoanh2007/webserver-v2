<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #4CAF50;
			width: 70%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		</style>
		
		<title>Home</title>
	</head>
	
	<body>
		<h2>HỆ THỐNG QUẢN LÝ HỌC SINH</h2>
		<ul class="topnav">
			<li><a class="active" href="home.php">Trang đầu</a></li>
			<li><a href="user data.php">Dữ liệu học sinh</a></li>
			<li><a href="registration.php">Đăng kí thẻ mới</a></li>
			<li><a href="read tag.php">Đọc ID thẻ</a></li>
		</ul>
		<br>
		
		<h2>Lời nói đầu</h2>
		<h>Đây là hệ thống quản lý học sinh siêu cấp vip pro được bắt đầu thực hiện vào ngày 15/4/2024 nhằm mang lại sự tiện ích cho hệ thống nhà trường.</h>
		<h4>Có sự góp mặt của:</h4>
		<h5>Vũ Thạo Hoành - 11A1</h5>
		<h5>Nguyễn Khắc Vỹ - 11A1</h5>
	</body>
</html>