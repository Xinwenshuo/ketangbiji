<?php

	class HTMLException extends Exception{

	}
	class DBException extends Exception{

	}
	try{
		throw new HTMLException('页面错误');
		throw new DBE
		$c = new Exception('错误信息');
		throw $c;
	}catch (HTMLException $e){
		echo $e->getMessage();
		echo '404 error页面';
	}catch (DBException $e){
		echo $e->getMessage();
		echo '服务器维护中....';
	}catch (Exception $e){
		echo $e->getMessage();
		echo '处理漏网之鱼';
	}
?>