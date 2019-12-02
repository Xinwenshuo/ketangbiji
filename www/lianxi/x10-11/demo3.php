<?php

include './demo1.php';
echo '<table widht="800" align="center" border="1">';
	echo '<tr>';
		echo '<th>编号</th>';
		echo '<th>文件名</th>';
		echo '<th>文件大小</th>';
		echo '<th>文件类型</th>';
		echo '<th>文件创建时间</th>';
		echo '<th>文件是否可读</th>';
	echo '</tr>';
	$i = 1;
	$handle = opendir('bin');
	while($filename = readdir($handle)){
		$filepath = './bin/'.$filename;
		// var_dump($filepath);
		echo '<tr>';
			echo '<td>'.$i++.'</td>';
			echo '<td>'.$filename.'</td>';
			echo '<td>'.getSize($filepath).'</td>';
			echo '<td>'.(filetype($filepath)=='dir'?'目录':'文件').'</td>';
			echo '<td>'.date('Y-m-d',filectime($filepath)).'</td>';
			echo '<td>'.(is_readable($filepath)?'可读':'不可读').'</td>';
		echo '</tr>';
	}
	echo '</table>';
	closedir($handle);