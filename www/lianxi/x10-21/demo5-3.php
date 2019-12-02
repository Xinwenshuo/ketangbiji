<?php

	$dsn = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($dsn,'root','xws1998');
	$pdo->setAttribute(3,1);
	$pdo->beginTransaction();
	$sql = "UPDATE jiao SET age=age-20 WHERE id=117";
	$row = $pdo->exec($sql);
	$sql = "UPDATE jiao SET age=age+20 WHERE id=118";
	$row = $row+$pdo->exec($sql);
	var_dump($row);
	if($row == 2){
		$pdo->commit();
	}else{
		$pdo->rollback();
	}
?>