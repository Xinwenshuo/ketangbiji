<?php
	
	$mysql = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($mysql,'root','xws1998');
	$pdo->setAttribute(3,1);
	$sql = "INSERT INTO jiao(name,sex,age,city) VALUES(?,?,?,?) ";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(1,$name);
	$stmt->bindParam(2,$sex);
	$stmt->bindParam(3,$age);
	$stmt->bindParam(4,$city);

	$name = '胡飞';
	$sex = 2;
	$age = 88;
	$city = '按回复';
	$bool = $stmt->execute();
	var_dump($bool);

?>