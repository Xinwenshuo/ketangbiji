<?php
	$dsn = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($dsn,'root','xws1998');
	$pdo->setAttribute(3,1);
	$sql = "SELECT * FROM jiao";
	var_dump($sql);
	$row = $pdo->query($sql);
	var_dump($row);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>序号</td>
			<td>姓名</td>
			<td>性别</td>
			<td>年龄</td>
			<td>城市</td>
		</tr>
		<?php foreach($row as $value){ ?>
			<tr>
				<td><?php echo $value['id']; ?></td>
				<td><?php echo $value['name']; ?></td>
				<td><?php

				 $v = $value['sex']; 
				 	switch($v){
				 		case 0;
				 		echo '女';
				 		break;
				 		case 1;
				 		echo '男';
				 		break;
				 		case 2;
				 		echo '人妖';
				 		break;
				 	}
				?></td>
				<td><?php echo $value['age'] ?></td>
				<td><?php echo $value['city'] ?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>