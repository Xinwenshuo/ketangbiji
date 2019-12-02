<?php
interface user{
	public function login();
	public function logout();
}
interface msg{
	public function fa();
	public function shou();
}
interface marry{
	public function jiehun();
	public function shenghaizi();
}
class laowang implements user,msg{
	public function login(){

	}
	public function logout(){

	}
	public function fa(){

	}
	public function shou(){
		
	}
}


?>