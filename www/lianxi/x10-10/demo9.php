<?php

echo '<table border="1">';
	for($i=1;$i<=9;$i++){
		echo '<tr>';
		for($j=1;$j<=$i;$j++){
			echo "<td>".$i."x".$j."=".$i*$j."</td>";
		}
		echo '</tr>';
	}
echo '</table>';