<?php

	$mysql = 'mysql:dbname=xin;host=localhost;charset=utf8';
	try{
		$pdo=new PDO($mysql,'root','xws1998');
	}catch(PDDException $e){
		echo $e->getMessage();
	}
	$pdo->setAttribute(3,1);
	$sql = "INSERT INTO jiao(name,sex,age,city) values(:name,:sex,:age,:city)";
	$stmt = $pdo->prepare($sql);
	$name = '熊二';
	$sex = 2;
	$age = 17;
	$city = '大森林';
	$stmt->bindParam('name',$name);
	$stmt->bindParam('sex',$sex);
	$stmt->bindParam('age',$age);
	$stmt->bindParam('city',$city);
	$bool = $stmt->execute();
	var_dump($bool);
	

?>