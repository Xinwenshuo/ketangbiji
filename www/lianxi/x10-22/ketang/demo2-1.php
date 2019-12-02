<?php

	$dns = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($dns,'root','xws1998');
	$pdo->setAttribute(3,1);
	$sql = "INSERT INTO jiao(name,sex,age,city) values(:name,:sex,:age,:city)";
	$stmt = $pdo->prepare($sql);
	$name = '郭冰';
	$sex = '5';
	$age = '55';
	$city = '臭不要脸';
	$stmt->bindParam('name',$name);
	$stmt->bindParam('sex',$sex);
	$stmt->bindParam('age',$age);
	$stmt->bindParam('city',$city);
	$bool = $stmt->execute();
	var_dump($bool);
?>