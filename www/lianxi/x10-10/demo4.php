<?php

echo '<table border="1" width="800" align="center">';
	for($i = 0;$i<100;$i++){
		if($i %10 == 0){
			if($i %20 ==0){
				echo '<tr bgcolor="red">';
			}else{
				echo '<tr bgcolor="cyan">';
			}
		}
		echo '<td>'.$i.'</td>';
		if($i % 10 ==9){
			echo '</td>';
		}
	}

echo '</table>';