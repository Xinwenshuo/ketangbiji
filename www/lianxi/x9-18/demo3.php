<?php
echo"<table border='1'>";
for($a=1;$a<=9; $a++){
	echo"<tr>";
	for($j=1;$j<=$a;$j++){
		echo"<td>".$a."*".$j."=".$a*$j."</td>";
	}
	echo"</tr>";
}
echo"<table>";
echo"<hr/>";

?>