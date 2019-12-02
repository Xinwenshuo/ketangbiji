<?php
	include './upload.function.php';

	$str = file_get_contents('./mysq1.txt');

	$arr = explode('&&', $str);

	array_pop($arr);

	foreach($arr as $k=>$v ){
		$new_arr1 = explode('##',$v);

		$new_arr2 = explode('@@',$new_arr1[1]);
		$new_arr2[]=$new_arr1[0];

		$new_arr3[] = $new_arr2;
	}
 var_dump($new_arr3);







/**************头像结束****************/

	//读取mysp1.txt文档的内容
	$cont = file_get_contents('./mysq1.txt');
	//将用&&分隔的字符串转换为数组;
	$arr = explode('&&',$cont);
	//最后的单元格没有啥用,删除最后一个单元;
	// array_pop($userinfo);
	//包含到html文件里
	// var_dump($arr);

	array_pop($arr);
/************分页开始************/
//1.知道每页跳条数
$num = 3;
//2.也能算出来总的条数
$total = count($arr);
//3.总页码数
$amount = ceil($total/$num);
// var_dump($amount);
//4.当前在第几页
$dpage = isset($_GET['page'])?$_GET['page']:1;
$offset = ($dpage-1)*$num;
$arr1 = array_slice($arr,$offset,$num,true);
//上一页
if($dpage-1<=1){
	$prevpage = 1;
}else{
	$prevpage =$dpage-1;
}
//下一页
if($dpage+1>=$amount){
	$nextpage = $amount;
}else{
	$nextpage = $dpage+1;
}

if($dpage<1){
	$dpage =1;
}
if($dpage>$amount){
	$dpage = $amount;
}


//






	/**********分页结束************/
	include 'Public/head.html';

	$i=1;
	//下面做表格
	echo '<table border="1" width="100%" align="center">';
	//做表格头
	echo '<tr>';
	echo '<th>编号</th>';
	echo '<th>用户名</th>';
	echo '<th>头像</th>';
	echo '<th>留言内容</th>';
	echo '<th>操作</th>';
	echo '</tr>';
	//将数组循环并将键与值附上变量
	foreach($new_arr3 as $k=>$v){
		//将用&&分隔的字符串转换为数组;
		// $user = explode('##',$value);
		// var_dump($user);
		echo '<tr>';
		//循环出来的键用于编号
		echo '<td>'.$i++.'</td>';
		//循环出来的$user字符串的第一个值是用户名
		echo '<td>'.$v[2].'</td>';
		echo "<td><img src='".$v[0]."' width='100px'></td>";
		//循环出来的$user字符串的第二个值是留言内容
		echo '<td>'.$v[1].'</td>';
		//点击链接跳转界面,并用di=$key来确定跳转后的页面的内容位置$key=键,然后进行编辑和删除;
		echo '<td><a href="./del.php?id='.$k.'">删除 </a> | <a href="./edit.php?id='.$k.'"> 编辑</a></td>';

		echo '</tr>';
		
	}
	echo '<tr>';
	echo '<td colspan="4" align="right">共'.$total.'条'.$dpage.'/'.$amount.'<a href="./read.php?page=1">首页</a> | <a href="./read.php?page='.$prevpage.'">上一页</a> | <a href="./read.php?page='.$nextpage.'">下一页</a><a href="./read.php?php?page='.$amount.'">尾页</a></td>';
	echo '</tr>';

	echo '</table>';
?>