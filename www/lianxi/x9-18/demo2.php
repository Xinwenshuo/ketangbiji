<?php
	// $a = 1;
	// while ($a<=10){
	// 	echo $a.'<br/>';
	// 	$a++;
	// }
	echo '<table border="1" width="800" align="center">';
	
		for($a=0;$a<+50;$a++){
			if($a % 10 ==0){
				if($a % 20 ==0){
					echo '<tr bgcolor="red">';
				}else{
					echo '<tr bgcolor="yellow">';
				}
			}
			echo '<td>'.$a.'</td>';
			if($a % 10 ==9){
				echo '</tr>';
			}
			
		}
		echo '</eable>';
	
?>