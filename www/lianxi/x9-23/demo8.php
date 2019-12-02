<?php
	$arr=array(
			0=>array('img'=>'2.jpg','name'=>'大宝剑','price'=>'1888'),
			1=>array('img'=>'3.jpg','name'=>'小宝剑','price'=>'588'),
			2=>array('img'=>'4.jpg','name'=>'中宝剑','price'=>'888'),
		);
	echo '<table border="1" width="800" align="center">';
		foreach($arr as $key=>$value){
			echo '<tr>';
				echo '<td>'.$value['img'].'</td>';
				echo '<td>'.$value['name'].'</td>';
				echo '<td>'.$value['price'].'</td>';
			echo '</tr>';
		}
	echo '</table>';
