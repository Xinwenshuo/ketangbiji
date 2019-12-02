<?php

// $fopen = fopen('mysql.txt','a');
$content = file_get_contents('mysql.txt');
// var_dump($content);
$arr = explode('&&',$content);
// var_dump($arr);
// array_pop($arr);
// var_dump($arr);
// var_dump($arr);


// var_dump($arr1);
// foreach($arr1 as $k=>$v){
// 	var_dump($v);
// }
// var_dump($arr1); 
/***********分页*************/
$num = 6;
$total = count($arr);
// var_dump($total);
$amount = ceil($total/$num);
$dpage = isset($_GET['page'])?$_GET['page']:1;
if($dpage-1<=1){
	$prevpage = 1;
}else{
	$prevpage = $dpage-1;
}
if($dpage+1>=$amount){
	$nextpage = $amount;
}else{
	$nextpage = $dpage+1;
}
if($dpage <1){
	$dpage =1;
}
if($dpage >$amount){
	$dpage = $amount;
}


$newinfo = array_slice($arr,$dpage,$num,true);
// var_dump($newinfo);
/***********分页結束*************/
$i=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>查看</title>
</head>
<body>
	<a href="./index.php">添加</a>
	<table border="1px">
		<tr style='width:1000px';>
			<th width='60px'>序号</th>
			<th width='190px'>用户名</th>
			<th width='1000px'>内容</th>
			<th width="100px">操作</th>
		</tr>
		<?php  
		foreach($newinfo as $key=>$value){
			$arr1 = explode('##',$value);
			// var_dump($arr1);
		echo '<tr>';
			echo "<td>".$i++."</td>";
			echo "<td>".$arr1[0]."</td>";
			echo "<td>".$arr1[1]."</td>";
			echo "<td width='100px'><a href='./del.php?id={$key}'>删除</a> | <a href='./edit.php?id={$key}'>修改</a></td>";
		echo '</tr>';

		}
		echo '<tr>';
		echo '<td colspan="4">'.'一共有'.$amount.'页当前页数'.$dpage.'页';
		echo '<a href="./read.php?page=1">首页</a> | ';
		echo '<a href="./read.php?page='.$prevpage.'">上一页</a> | ';
		echo '<a href="./read.php?page='.$nextpage.'">下一页</a> | ';
		echo '<a href="./read.php?page='.$amount.'">尾页</a>'.'</td>';
		echo '</tr>';
		?>

	</table>
</body>
</html>