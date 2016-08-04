<?php
include_once '../model.bean/DangKiPhongBEAN.php';
include_once '../model.dao/DangKiPhongDAO.php';
include_once '../model.bean/PhongTroBean.php';
include_once '../model.dao/PhongTroDao.php';
$idDK = $_GET['idDK'];
$Status = 1;
$phongTroDAO = new PhongTroDao();
$dkPhongDao = new DangKyPhongDAO();
$dkPhong = $dkPhongDao->getItemById($idDK);
$idPhong = $dkPhong->getidPhong();
if($dkPhongDao->updateStatusByID($idDK)){
	$phongTroDAO->updateStatusById($idPhong,$Status);
	$dkPhongDao->deteteItemStatus($idPhong);
	include_once '../controller/DSDangKiPhongController.php';
}
else{
	echo(" lỗi hệ thống");
	
}
?>