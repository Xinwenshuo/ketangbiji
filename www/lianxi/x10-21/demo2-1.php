<?php

	$mysql = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($mysql,'root','xws1998');
	$pdo->setAttribute(3,1);
	$sql = "INSERT INTO jiao(name,sex,age,city) values('高志博',1,88,'长春')";
	$row = $pdo->exec($sql);
	var_dump($row);
	$id = $pdo->lastInsertId();
	echo $id;