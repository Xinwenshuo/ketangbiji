<?php

	echo '开门<br>';
	try{
		throw new exception('钥匙丢了');
	}catch(exception $e){
		echo '备用钥匙<br>';
	}
	echo '进房间<br>';
?>