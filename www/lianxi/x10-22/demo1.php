<?php

	$dns = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($dns,'root','xws1998');
	$pdo->setAttribute(3,1);
	$sql = "INSERT INTO jiao(name,sex,age,city) values(:name,:sex,:age,:city)";
	$data = $pdo->prepare($sql);
	$bool = $data->execute($_POST);
	var_dump($bool);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="./demo.php" method="post">
		name: <input type="text" name="name"><br>
		sex: <input type="radio" name="sex" value="0">女
			<input type="radio" name="sex" value="1">男
			<input type="radio" name="sex" value="2">人妖<br>
		age: <input type="text" name="age" id=""><br>
		city <input type="text" name="city" id=""><br>
		<input type="submit" value="提交">
	</form>
</body>
</html>