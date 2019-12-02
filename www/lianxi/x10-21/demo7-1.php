<?php
	
	$dns = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($dns,'root','xws1998');
	$pdo->setAttribute(3,1);
	$sql = "INSERT INTO jiao(name,sex,age,city) values(?,?,?,?) ";
	$stmt = $pdo->prepare($sql);

	$name = '胡飞';
	$sex = 2;
	$age = 77;
	$city = '号IHF哦死电话发来额凤凰山';
	$data = array(
		$name,
		$sex,
		$age,
		$city
	);

	$bool = $stmt->execute($data);
	var_dump($bool);
?>