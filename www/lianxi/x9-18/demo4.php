<?php
	echo"<table border='1'>";
	for($a=9;$a>=1;$a--){
		echo "<tr>";
	for($j=1;$a>=$j;$j++){
		echo "<td>".$a."*".$j."=".$a*$j."</td>";
		}echo "</tr>";
	}
	echo "</table>";

?>