<?php
	
	$mysql = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($mysql,'root','xws1998');
	$pdo->setAttribute(3,1);
	$sql = "INSERT INTO jiao(name,sex,age,city) values('连宏宝',1,88,'吉林') ";
	$row = $pdo->exec($sql);
	var_dump($row);
	echo $pdo->lastInsertId();