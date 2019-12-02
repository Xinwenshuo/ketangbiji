<?php

	echo "gaozhibo <br>";
	try{
		echo 'choubuyaolian <br>';
		throw new exception('shozhende <br>');
		echo 'kebushima <br>';
	}catch(exception $e){
		echo $e->getmessage();
		echo 'guobing <br>';
	}
	echo 'doushichoubiuyaolian <br>';

?>