<?php
	echo "<table border='1px'>";
	for($a=1;$a<=9;$a++){
		echo "<tr>";
			for($j=1;$j<10-$a;$j++){
				echo "<td>&#160</td>";
			}
			for($b=1;$b<=$a;$b++){
				echo "<td>".$a."*".$b."=".$a*$b."</td>";
			}
		echo "</tr>";
	}


?>