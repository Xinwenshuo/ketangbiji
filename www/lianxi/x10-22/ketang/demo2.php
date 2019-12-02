<?php

	$dns = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($dns,"root",'xws1998');
	$pdo->setAttribute(3,1);
	$sql = "INSERT INTO jiao(name,sex,age,city) values(:name,:sex,:age,:city) ";
	$stmt = $pdo->prepare($sql);
	$name = '高志博';
	$sex = 4;
	$age = 85;
	$city = '爱上对方你看见你丢埃尔文';
	$stmt->bindParam('name',$name);
	$stmt->bindParam('sex',$sex);
	$stmt->bindParam('age',$age);
	$stmt->bindParam('city',$city);
	$bool = $stmt->execute();
	var_dump($bool);
?>