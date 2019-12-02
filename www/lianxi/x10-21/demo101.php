<?php

	$mysql = "mysql:host=localhost;dbname=xin;charset=utf8";
	try{
		$pdo = new PDO($mysql,'root','xws1998');
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	$pdo->setAttribute(3,1);
	$sql = "INSERT INTO jiao(name,sex,age,city) values(:name,:sex,:age,:city)";
	$stmt = $pdo->prepare($sql);
	// var_dump($stmt);exit;
	// $name = '熊二';
	// $sex = 2;
	// $age = 17;
	// $city = '大兴安岭';
	// $data = array(
	// 	'name'=>$name,
	// 	'sex'=>$sex,
	// 	'age'=>$age,
	// 	'city'=>$city
	// );
	// var_dump($data);exit;
	var_dump($_POST);
	$bool = $stmt->execute($_POST);
	var_dump($bool);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="demo101.php" method="post">
		name: <input type="text" name="name"><br>
		sex: <input type="text" name="sex"><br>
		age: <input type="text" name="age"><br>
		city: <input type="text" name="city"><br>
		<input type="submit" value="提交">
	</form>
</body>
</html>