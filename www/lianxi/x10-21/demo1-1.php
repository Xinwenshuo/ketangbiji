<?php

	$mysql = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($mysql,'root','xws1998');
	$pdo->setAttribute(3,1);
	$sql = "SELECT * FROM jiao";
	$row = $pdo->query($sql);
	var_dump($row);