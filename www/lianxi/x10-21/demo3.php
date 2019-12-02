<?php
	
	$mysql = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($mysql,'root','xws1998');
	var_dump($pdo);
	$pdo->setAttribute(3,1);
	$sql = "UPDATE jiao SET name='胡飞' where id=105";
	$row = $pdo->exec($sql);
	echo $row;