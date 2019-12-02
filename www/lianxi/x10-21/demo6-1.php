<?php

	$dns = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($dns,'root','xws1998');
	$pdo->setAttribute(3,1);

	$sql = "INSERT INTO jiao(name,age,sex,city) VALUES(?,?,?,?) ";

	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(1,$name);
	$stmt->bindParam(2,$sex);
	$stmt->bindParam(3,$age);
	$stmt->bindParam(4,$city);

	$name = '胡飞';
	$sex = 1;
	$age = 88;
	$city = 'ahgoefhodsf';
	$bool = $stmt->execute();
	var_dump($bool);

?>