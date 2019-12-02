<?php
	//准备dsn
	$dsn = 'mysql:host=localhost;dbname=xin;charset=utf8';
	//得到对象
	$pdo = new PDO($dsn,'root','xws1998');
	//设置错误模式
	$pdo->setAttribute(3,1);
	//常规操作
	$sql = "SELECT * FROM jiao";
	$stmt = $pdo->query($sql);
	var_dump($stmt);
	


?>