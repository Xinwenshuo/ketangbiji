<?php 

	$dns = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($dns,'root','xws1998');
	$pdo->setAttribute(3,1);
	$pdo->beginTransaction();
	$sql = "UPDATE jiao SET age=age-20 WHERE id=115 ";
	$row = $pdo->exec($sql);
	$sql = "UPDATE jiao SET age=age+20 WHERE id=116 ";
	$row = $row+$pdo->exec($sql);
	var_dump($row);
	if($row == 2){
		$pdo->commit();
	}else{
		$pdo->rollback();
	}


?>