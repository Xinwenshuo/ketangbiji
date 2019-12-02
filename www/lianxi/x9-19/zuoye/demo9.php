<?php
	echo "<table border='1px'>";
		for($a=1;$a<=9;$a++){
			echo "<tr>";
			for($b=0;$b<9-$a;$b++){
				echo "<td>&#160;</td>";
			}
			for($j=1;$j<=$a;$j++){
				echo "<td>".$a."*".$j."=".$a*$j."</td>";
			}
			echo "</tr>";
		}
	echo "</table>";


?>