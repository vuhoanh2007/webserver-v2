<?php
    require 'database.php';
    $id = 0;
     
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['id'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM table_the_iot_projects  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: user data.php");
         
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
	<title>Delete</title>
</head>
 
<body>
	<h2 align="center">HỆ THỐNG QUẢN LÝ HỌC SINH</h2>

    <div class="container">
     
		<div class="span10 offset1">
			<div class="row">
				<h3 align="center">Xóa học sinh</h3>
			</div>

			<form class="form-horizontal" action="user data delete page.php" method="post">
				<input type="hidden" name="id" value="<?php echo $id;?>"/>
				<p class="alert alert-error">Bạn có chắc chắn muốn xóa không ?</p>
				<div class="form-actions">
					<button type="submit" class="btn btn-danger">Có</button>
					<a class="btn" href="user data.php">Không</a>
				</div>
			</form>
		</div>
                 
    </div> <!-- /container -->
  </body>
</html>