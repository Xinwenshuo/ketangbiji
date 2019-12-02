<?php
		include './filesize.php';
		 echo disk_free_space('D:');
		var_dump(getSize(disk_total_space('C:')));
		$toal = disk_total_space('C:');
		echo $toal;


?>