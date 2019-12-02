<?php

	$mysql = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($mysql,'root','xws1998');
	$pdo->setAttribute(3,1);
	$sql = "DELETE FROM jiao where id=111";
	$row = $pdo->exec($sql);
	var_dump($row);
