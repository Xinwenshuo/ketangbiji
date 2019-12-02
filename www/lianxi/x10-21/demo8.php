<?php  

	$mysql = 'mysql:host=localhost;dbname=xin;charset=utf8';
	$pdo = new PDO($mysql,'root','xws1998');
	$pdo->setAttribute(3,1);
	$sql = "SELECT * FROM jiao WHERE id>?";
	$stmt = $pdo->prepare($sql);
	$id=110;
	$stmt->bindParam(1,$id);
	$bool = $stmt->execute();
	var_dump($bool);
	$list = $stmt->fetchall(2);
	var_dump($list);
?>