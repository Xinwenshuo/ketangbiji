<?php

echo '<table border="1" width="800" align="center">';
	$i = 0;
	while($i<10){
		echo '<tr>';
			$j = 0;
			while($j<10){
				echo'<td>'.$j.'</td>';
				$j++;
			}
			echo '</tr>';
			$i++;
	}
	echo '</table>';