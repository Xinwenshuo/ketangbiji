<?php
$content = file_get_contents('./mysql.txt');
// var_dump($content);
$userinfo = explode('&&',$content);
// var_dump($userinfo);
array_pop($userinfo);
/**************分页开始******************/
$num = 3;
$total = count($userinfo);
var_dump($total);
$amount = ceil($total/$num);
var_dump($amount);
$dpage = isset($_GET['page'])?$_GET['page']:1;
var_dump($dpage);
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
if($dpage<1){
	$dpage = 1;
}
if($dpage>$amount){
	$dpage = $amount;
}
$offset = ($dpage-1)*$num;
var_dump($offset);
$newinfo = array_slice($userinfo,$offset,$num,true); 
var_dump($newinfo);
/**************分页结束******************/
/**************头像开始******************/
include './upload.function.php';
// $str = file_get_contents('./mysql.txt');
// var_dump($str);
$arr = $newinfo;
// var_dump($arr);
// array_pop($arr);
foreach($arr as $key=>$v){
	$new_arr1 = explode('##',$v);
	// var_dump($new_arr1);
	$new_arr2 = explode('@@',$new_arr1[1]);
	// var_dump($new_arr2);
	$new_arr2[] = $new_arr1[0];
	
	$new_arr3[] = $new_arr2;
}
 // var_dump($new_arr3);




include './head.html';
echo '<table border="1" width="100%" align="center">';
	echo '<tr>';
		echo '<th>编号</th>';
		echo '<th>用户名</th>';
		echo '<th>头像</th>';
		echo '<th>留言内容</th>';
		echo '<th>操作</th>';
	echo '</tr>';
	$i = 0;
	foreach($new_arr3 as $key=>$value){
		// $user = explode('##',$value);
		echo '<tr>';
		$i++;
			echo '<td>'.$i.'</td>';
			echo '<td>'.$value[2].'</td>';
			echo "<td><img src='".$value[0]."' width='100px'></td>";
			// var_dump($user[1]);
			echo '<td>'.$value[1].'</td>';
			echo '<td><a href="./del.php?id='.$key.'">删除</a> | <a href="./edit.php?id='.$key.'">编辑</a></td>';
		echo '</tr>';
	}
	echo '<tr>';
		echo '<td colspan="4" align="right">';
		echo '共'.$total.'条'.$dpage.'/'.$amount;
		echo "<a href='./read.php?page=1'>首页</a>";
		echo ' | <a href="./read.php?page='.$prevpage.'">上一页</a>';
		echo ' | <a href="./read.php?page='.$nextpage.'">下一页</a>';
		echo ' | <a href="./read.php?page='.$amount.'">尾页</a></td>';
			
	echo '</tr>';
	echo '</table>';