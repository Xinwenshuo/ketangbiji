<?php

	$mysql = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($mysql,'root','xws1998');
	$pdo->setAttribute(3,1);
	$sql = "UPDATE jiao set name='赵铁刚' where id=105";
	$row = $pdo->exec($sql);
	var_dump($row);