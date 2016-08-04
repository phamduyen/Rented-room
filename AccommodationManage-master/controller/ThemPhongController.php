<?php
include_once '../model.bean/PhongTroBean.php';
include_once '../model.dao/PhongTroDao.php';
include_once '../model.dao/daytroDAO.php';
include_once '../model.bean/daytroBEAN.php';
include_once '../utils/ProcessIdLibraries.php';
$id = new ProcessIdLibraries();
$idPhong = 'PT0'.($id->getID("idDay", "daytro", 3)+1);
$phongTroDao = new PhongTroDao();
$phongTro = new PhongTroBean();
$dayTroDao = new daytroDAO();
// lấy tham số truyền qua POST
$phongTro->setIdPhong($idPhong);
$phongTro->setIdDay($_POST['idDay']);
$phongTro->setDienTich($_POST['dienTich']);
$phongTro->setGiaPhong($_POST['gia']);
$phongTro->setMota($_POST['moTa']);
$phongTro->setStatus(0);

if($phongTroDao->addItem($phongTro)){
	echo '<script type="text/javascript">';
	echo 'alert("Thêm Thành Công")';
	echo '</script>';
	
}else {
	echo '<script type="text/javascript">';
	echo 'alert("Thêm Thất bại idPhong trung ")';
	echo '</script>';
}
include_once '../controller/QLPhongTroController.php';

?>