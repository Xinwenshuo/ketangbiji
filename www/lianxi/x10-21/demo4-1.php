<?php

	$dsn = "mysql:host=localhost;dbname=xin;charset=utf8";
	$pdo = new PDO($dsn,'root','xws1998');
	$pdo->setAttribute(3,1);
	$sql = "SELECT * FROM jiao";
	$userlist = $pdo->query($sql);
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1" width="800px">
		<tr>
			<td>序号</td>
			<td>名字</td>
			<td>性别</td>
			<td>年龄</td>
			<td>城市</td>
		</tr>
		<?php foreach($userlist as $value){ ?>
			<tr>
				<td><?php echo $value['id']?></td>
				<td><?php echo $value['name']?></td>
				<td><?php echo $value['sex']?></td>
				<td><?php echo $value['age']?></td>
				<td><?php echo $value['city']?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>