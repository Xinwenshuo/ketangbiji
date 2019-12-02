<?php

	function demo($j,$n,$h){
		echo "<table border='1' cellspacing='0' cellpadding='0' width='3100px'>";
			for($a=1;$a<=$j;$a++){
				echo "<tr >";
				for($b=1;$b<=$n;$b++){
					echo "<td>".$h."</td>";
				}
				echo "</tr>";
			}
		echo "</table>";
	}
	demo(25,25,'你是渣渣');
