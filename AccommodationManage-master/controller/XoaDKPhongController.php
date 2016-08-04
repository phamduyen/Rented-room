<?php

include_once '../model.bean/DangKiPhongBEAN.php';
include_once '../model.dao/DangKiPhongDAO.php';
include_once '../model.dao/PhongTroDao.php';
include_once '../model.bean/PhongTroBean.php';
$idPhong = $_GET['idPhong'];
$dkPhongDao =new DangKyPhongDAO();
$phongTroDao= new PhongTroDao();
if($dkPhongDao->deteteItem($idPhong))
{
	if($phongTroDao->updateStatusById($idPhong,0)){
		echo '<script type="text/javascript">';
		echo 'alert("Đã xóa")';
		echo '</script>';
		include_once '../controller/DSDangKiPhongController.php';
	};
}
?>