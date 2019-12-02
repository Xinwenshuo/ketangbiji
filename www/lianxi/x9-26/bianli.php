<?php
	include './filesize.php';
	echo '<table width="800" align="center" border="1px">';
		echo "<tr>";
			echo "<th>编号</th>";
			echo "<th>文件名</th>";
			echo "<th>文件大小</th>";
			echo "<th>文件类型</th>";
			echo "<th>文件的创建时间</th>";
			echo "<th>文件是否可读</th>";
		echo "</tr>";
		$i=1;
		$res =opendir('./bin');
		while($filename = readdir($res)){
			$filepath = './bin/' .$filename;
			if($filename =='.'||$filename=='..'){
				continue;
			}
			echo '<tr>';
				echo "<td>".$i++."</td>";
				echo "<td>".$filename."</td>";
				echo "<td>".getSize($filepath)."</td>";
				echo "<td>".(filetype($filepath)=='dir'?'目录':'文件')."</td>";
				echo "<td>".date('Y-m-d H:i:s',filectime($filepath))."</td>";
				echo "<td>".(is_readable($filepath)?'可读文件':'不可读文件')."</td>";
		}
	echo "</table>";
?>