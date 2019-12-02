<?php

echo '<table width="800px" border="1" align="center">';
	for($i=0;$i<10;$i++){
		if($i % 2 !=0){
			$bgcolor = 'red';
		}else{
			$bgcolor = 'cyan';
		}
		echo '<tr bgcolor="'.$bgcolor.'">';
			for($j = 0;$j<10;$j++){
				echo '<td>1</td>';
			}
		echo '</tr>';
	}

echo '</table>';