<?php
class db{
	public function init(){
		$mysql = new mysqli("localhost","root","","thuephongtro");		
		$mysql->set_charset("UTF8");
		if(mysqli_connect_error()){
			return null;
		} else{
			return $mysql;
		}
	}
}
?>