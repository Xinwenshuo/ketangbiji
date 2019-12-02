<?php
	$cont =file_get_contents('./mysq1.txt');
	$userinfo =explode('&&',$cont);
	array_pop($userinfo);
	include 'Public/head.html';
	echo '<table border="1" width="100%" align="center">';
	echo '<tr>';
	echo '<th>编号</th>';
	echo '<th>用户名</th>';
	echo '<th>留言内容</th>';
	echo '<th>操作</th>';
	echo '</tr>';
	foreach($userinfo as $key=>$value){
		$user = explode('##',$value);
		echo '<tr>';
		echo '<td>'.$key.'</td>';
		echo '<td>'.$user[0].'</td>';
		echo '<td>'.$user[1].'</td>';
		echo '<td><a href="./del.php?id='.$key.'">删除 </a> | <a href="./edit.php?id='.$key.'"> 编辑</a></td>';
		echo '</tr>';
	}
	echo '</table>';
	




?>