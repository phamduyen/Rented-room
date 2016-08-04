<?php
include_once '../model.bean/DangKiPhongBEAN.php';
include_once '../model.dao/DangKiPhongDAO.php';
include_once '../model.dao/PhongTroDao.php';
include_once '../model.bean/PhongTroBean.php';
$idPhong = $_GET['idPhong'];
$phongTroDao = new PhongTroDao();
$dkPhongDao = new DangKyPhongDAO();
if($phongTroDao->deteteItem($idPhong)){
	if($dkPhongDao->deteteItem($idPhong)){;
	//header('locaton:../controller/QLPhongTroController.php');
	header('Location: ../controller/QLPhongTroController.php');
	}
}
?>