<?php

	$dns = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($dns,'root','xws1998');
	$pdo->setAttribute(3,1);
	$sql = "SELECT * FROM jiao WHERE id>?";
	$stmt =$pdo->prepare($sql);
	$id=110;
	$stmt->bindParam(1,$id);
	$link = $stmt->execute();
	var_dump($link);
	$kk = $stmt->fetchAll(2);
	var_dump($kk);

?>