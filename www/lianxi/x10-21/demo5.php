<?php

	$dns = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($dns,'root','xws1998');
	$pdo->setAttribute(3,1);
	$pdo->beginTransaction();
	$sql = "UPDATE jiao set age=age-20 WHERE id=114";
	$row = $pdo->exec($sql);
	$sql = "UPDATE jiao set age=age+20 WHERE id=113";
	$row = $row + $pdo->exec($sql);
	var_dump($row);
	if($row == 2){
		$pdo->commit();
	}else{
		$pdo->rollback();
	}
;?>