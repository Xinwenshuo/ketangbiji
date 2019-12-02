<?php
	echo "<table border='1' >";
		for($a=9;$a>=1;$a--){
			echo "<tr>";
				for($b=1;$b<10-$a;$b++){
					echo "<td>&#160</td>";
				}
				for($j=1;$j<=$a;$j++){
					echo "<td>".$a."*".$j."=".$a*$j."</td>";
				}
			echo "</tr>";
		}
	echo "</table>"


?>