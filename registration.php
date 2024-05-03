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
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
		}
		
		textarea {
			resize: none;
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
		</style>
		
		<title>Đăng kí thẻ mới</title>
	</head>
	
	<body>

		<h2 align="center">HỆ THỐNG QUẢN LÝ HỌC SINH</h2>
		<ul class="topnav">
			<li><a href="home.php">Trang đầu</a></li>
			<li><a href="user data.php">Dữ liệu học sinh</a></li>
			<li><a class="active" href="registration.php">Đăng kí thẻ mới</a></li>
			<li><a href="read tag.php">Đọc ID thẻ</a></li>
		</ul>

		<div class="container">
			<br>
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					<h3 align="center">Biểu mẫu đăng kí</h3>
				</div>
				<br>
				<form class="form-horizontal" action="insertDB.php" method="post" >
					<div class="control-group">
						<label class="control-label">ID thẻ</label>
						<div class="controls">
							<textarea name="id" id="getUID" placeholder="Vui lòng nhập ID thẻ" rows="1" cols="1" required></textarea>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Họ và tên</label>
						<div class="controls">
							<input id="div_refresh" name="name" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Ngày sinh</label>
						<div class="controls">
							<input id="div_refresh" name="bd" type="date"  placeholder="" required>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Giới tính</label>
						<div class="controls">
							<select name="gender">
								<option value="Male">Nam</option>
								<option value="Female">Nữ</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Lớp</label>
						<div class="controls">
							<input name="class" type="text" placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Mã học sinh</label>
						<div class="controls">
							<input name="ids" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="form-actions">
						<button type="submit" class="btn btn-success">Lưu</button>
                    </div>
				</form>
				
			</div>               
		</div> <!-- /container -->	
	</body>
</html>