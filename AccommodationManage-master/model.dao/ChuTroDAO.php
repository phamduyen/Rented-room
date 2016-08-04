<?php
include_once '../model.dao/db.php';
include_once '../model.bean/ChuTroBean.php';

class ChuTroDAO{
	public  function getListItem(){
		$query = " Select *from chutro ";
		$db= new db();
		$arr = array();
		$result = $db->init()->query($query);
		while ($item= mysqli_fetch_assoc($result)){
			$ChuTro = new ChuTroBean();
			$ChuTro->setIdChu($item['idChu']);
			$ChuTro->setPassword($item['Password']);
			$ChuTro->setHoten($item['HoTen']);
			$ChuTro->setSdt($item['SDT']);
			$ChuTro->setDiaChi($item['DiaChi']);
			$ChuTro->setStatus($item['Status']);
			array_push($arr, $ChuTro);
		}
		return $arr;
	}
	
	public function getItemByIdPass($id,$pass){
		$query = " Select *from chutro where idChu = '".$id."' and Password = '".$pass."'";
		$db= new db();
		$ChuTro = new ChuTroBean();
		$result = $db->init()->query($query);
		while ($item= mysqli_fetch_assoc($result)){
			
			$ChuTro->setIdChu($item['idChu']);
			$ChuTro->setPassword($item['Password']);
			$ChuTro->setHoten($item['HoTen']);
			$ChuTro->setSdt($item['SDT']);
			$ChuTro->setDiaChi($item['DiaChi']);
			$ChuTro->setStatus($item['Status']);
		}
		return $ChuTro;
	}
	
	 public function getItemByID($id){
	 	$query = " Select *from chutro where idChu = '".$id."'";
	 	$db= new db();
	 	$result = $db->init()->query($query);
	 	while ($item= mysqli_fetch_assoc($result)){
	 		$ChuTro = new ChuTroBean();
			$ChuTro->setIdChu($item['idChu']);
			$ChuTro->setPassword($item['Password']);
			$ChuTro->setHoten($item['HoTen']);
			$ChuTro->setSdt($item['SDT']);
			$ChuTro->setDiaChi($item['DiaChi']);
			$ChuTro->setStatus($item['Status']);
				
	 	}
	 	return $ChuTro;
	 }
	 
	 public  function addIteam(ChuTroBean $ChuTro){
	 	$query = "INSERT INTO adim(idChu,Password,HoTen,DiaChi,SDT,Email,Status) values ('" .$ChuTro->getIdChu()."','" .$ChuTro->getPassword()."','" .$ChuTro->getDiaChi()."','" .$ChuTro->getSdt()."','" .$ChuTro->getEmail()."','" .$ChuTro->get()."')";
	 	$db = new db();
	 	$result = $db->init()->query($query);
	 	return $result;
	 }
	 
	 public function updataIteam(ChuTroBean $ChuTro){
	 	$query = "update adim set '" .$ChuTro->getHoTen()."','" .$ChuTro->getDiaChi()."','" .$ChuTro->getPassword()."','" .$ChuTro->getSdt()."','" .$ChuTro->getEmail()."','" .$ChuTro->get()."' where idAD ='" .$ChuTro->getIDAD()."',";
	 	$db = new db();
	 	$result = $db->init()->query($query);
	 	return $result;
	 }
	 public function deleteIteam($id){
	 	$db = new db();
	 	$query = "DELETE FROM chutro WHERE idChu = '".$id."'";
	 	$result = $db->init()->query($query);
	 	return $result;
	 }
	 
}

?>