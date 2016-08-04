<?php
session_start();
include_once '../model.bean/PhongTroBean.php';
include_once '../model.dao/PhongTroDao.php';
include_once '../model.dao/daytroDAO.php';
include_once '../model.bean/daytroBEAN.php';
$phongTroDao = new PhongTroDao();
$phongTro = new PhongTroBean();
$dayTroDao = new daytroDAO();
// lấy tham số truyền qua POST
$phongTro->setIdPhong($_POST['idPhong']);
$phongTro->setIdDay($_POST['idDay']);
$phongTro->setDienTich($_POST['dienTich']);
$phongTro->setGiaPhong($_POST['gia']);
$phongTro->setMota($_POST['moTa']);
$phongTro->setStatus(0);
if($phongTroDao->updateItem($phongTro)){
	echo '<script type="text/javascript">';
	echo 'alert("Update Thành Công")';
	echo '</script>';
	
	}else {
		echo '<script type="text/javascript">';
		echo 'alert("Update thất bại ")';
		echo '</script>';
	}
	include_once '../controller/QLPhongTroController.php';


?>