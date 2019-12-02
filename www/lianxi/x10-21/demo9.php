<?php
	$mysql = "mysql:host=localhost;dbname=xin;charset=utf8";
	// $sqlite = "sqlite:./php221.sqlite";
	$pdo = new PDO($mysql,'root','xws1998');
	$pdo->setAttribute(3,1);
	$sql = "SELECT * FROM jiao WHERE id >?";
	$stmt = $pdo->prepare($sql);
	$id = 10;
	$stmt->bindParam(1,$id);
	$bool = $stmt->execute();
	var_dump($bool);
	$list = $stmt->fetchall(2);
	var_dump($list);
	
?>