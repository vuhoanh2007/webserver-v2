<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		$id = $_POST['id'];
		$gender = $_POST['gender'];
        $class = $_POST['class'];
        $IDs = $_POST['ids'];
		$bd = $_POST['bd'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO table_the_iot_projects (name,bd,gender,class,IDs,id) values(?, ?, ?, ?, ?, ?)";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$bd,$gender,$class,$IDs,$id));
		Database::disconnect();
		header("Location: user data.php");
    }
?>