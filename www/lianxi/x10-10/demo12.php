<?php

echo '<table border="1">';
	for($i=9;$i>=1;$i--){
		echo '<tr>';
		for($z=0;$z<9-$i;$z++){
			echo '<td>&#160;</td>';
		}
		for($j=1;$j<=$i;$j++){
			echo "<td>".$i."x".$j."=".$i*$j."</td>";
		}
	}
	echo '</tr>';
echo '</table>';