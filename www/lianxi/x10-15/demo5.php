<?php
$link = new mysqli('127.0.0.1','root','','test');
$link->set_charset('utf8');
$sql = "select * from user";
// $sql = "insert into user(name,age) values('飞飞',99)";
$res = $link->query($sql);
// echo mysqli_affected_rows($link);exit;
// $arr=$res->fetch_assoc();
// var_dump($arr);
// echo $link->insert_id;exit;
while($arr = $res->fetch_assoc()){
	// var_dump($arr);

	$arr1[] = $arr;
	// var_dump($arr1);
};
?>
<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>ddd</title>
</head>
<body>
	<table border='1px' width='800px'>
		<tr>
			<th>序号</th>
			<th>姓名</th>
			<th>年龄</th>
		</tr>
		<?php foreach($arr1 as $k=>$v){?>
			<tr>
				<td><?php echo $v['id'];?></td>
				<td><?php echo $v['name'];?></td>
				<td><?php echo $v['age'];?></td>
			</tr>
		<?php } ;?>
	</table>	
</body>
</html>