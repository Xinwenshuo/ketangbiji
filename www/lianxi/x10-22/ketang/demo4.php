<?php
	// //得到异常处理的对象 Exception()
	// $e= new Exception('我是异常处理类得到的对象');
	// var_dump($e);
	// //得到错误信息
	// echo $e->getMessage();
	// throw $e;
	echo '早场起来拥抱太阳<br>';
	try{
		echo '床好舒服不想起<br>';
		throw new exception('就是不起');
		echo '懒在床上<br>';
	}catch(exception $e){
		echo $e->getmessage();
		echo '你说不起就不起<br>';
	}
	echo '上课迟到了吧<br>';
?>