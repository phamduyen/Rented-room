<?php
include_once '../model.dao/db.php';
include_once '../model.bean/AdminDAO.php';
class AdminDAO{
	public  function getListItem(){
		$query = " Select *from admin where status = 1 ";
		$db= new db();
		$arr = array();
		$result = $db->init()->query($query);
		while ($item= mysqli_fetch_assoc($result)){
			$Admin = new AdminBean();
			$Admin->setIDAD($item['idAD']);
			$Admin->setPassword($item['Password']);
			$Admin->setHoten($item['HoTen']);
			$Admin->setSdt($item['SDT']);
			$Admin->setEmail($item['Email']);
			$Admin->setStatus($item['Status']);
			array_push($arr, $Admin);
		}
		return $arr;
	}
	
	public function getItemByIdPass($id,$pass){
		$query = " Select *from admin where idAD = '".$id."' and Password = '".$pass."'";
		$db= new db();
		
		$result = $db->init()->query($query);
		while ($item= mysqli_fetch_assoc($result)){
			$Admin = new AdminBean();
			$Admin->setIDAD($item['idAD']);
			$Admin->setPassword($item['Password']);
			$Admin->setHoten($item['HoTen']);
			$Admin->setSdt($item['SDT']);
			$Admin->setEmail($item['Email']);
			$Admin->setStatus($item['Status']);
			
		}
		return $Admin;
	}
	 public function getItemByID($id){
	 	$query = " Select *from admin where idAD = '".$id."'";
	 	$db= new db();
	 	$arr = array();
	 	$result = $db->init()->query($query);
	 	while ($item= mysqli_fetch_assoc($result)){
	 		$Admin = new AdminBean();
	 		$Admin->setIDAD($item['idAD']);
	 		$Admin->setPassword($item['Password']);
	 		$Admin->setHoten($item['HoTen']);
	 		$Admin->setSdt($item['SDT']);
	 		$Admin->setEmail($item['Email']);
	 		$Admin->setStatus($item['Status']);
	 			
	 	}
	 	return $arr;
	 }
	 
	 public  function addIteam(AdminBean $AdminBean){
	 	$query = "INSERT INTO adim(idAD,Password,HoTen,SDT,Email,Status) values ('" .$AdminBean->getIDAD()."','" .$AdminBean->getPassword()."','" .$AdminBean->getSdt()."','" .$AdminBean->getEmail()."','" .$AdminBean->get()."')";
	 	$db = new db();
	 	$result = $db->init()->query($query);
	 	return $result;
	 }
	 
	 public function updataIteam(AdminBean $AdminBean){
	 	$query = "update adim set '" .$AdminBean->getPassword()."','" .$AdminBean->getSdt()."','" .$AdminBean->getEmail()."','" .$AdminBean->get()."' where idAD ='" .$AdminBean->getIDAD()."',";
	 	$db = new db();
	 	$result = $db->init()->query($query);
	 	return $result;
	 }
	 public function deleteIteam($id){
	 	$db = new db();
	 	$query = "DELETE FROM admin WHERE idAD = '".$id."'";
	 	$result = $db->init()->query($query);
	 	return $result;
	 }
	 
}

?>