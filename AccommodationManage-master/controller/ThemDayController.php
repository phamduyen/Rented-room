<?php
session_start();
include_once '../utils/ProcessIdLibraries.php';
include_once '../model.bean/daytroBEAN.php';
include_once '../model.bean/KhuVucBean.php';
include_once '../model.dao/daytroDAO.php';
include_once '../model.dao/KhuVucDao.php';
$id = new ProcessIdLibraries();
$idDay = 'DT0'.($id->getID("idDay", "daytro", 3)+1);
$diaChi = $_POST['diaChi'];
$idKhu = $_POST['idKhu'];
// tạo đối tượng
$dayTro = new daytroBEAN();
$dayTro->setidDay($idDay);
$dayTro->setDiaChi($diaChi);
$dayTro->setidChu($_SESSION['username']);
$dayTro->setidKhu($idKhu);
//thêm dãy
$dayTroDao =new daytroDAO();
if($dayTroDao->addItem($dayTro)){
	echo '<script type="text/javascript">';
	echo 'alert("Tạo thành công")';
	echo '</script>';
	include_once '../controller/DSDayTroController.php';
}else {
	echo '<script type="text/javascript">';
	echo 'alert("lỗi hệ thống")';
	echo '</script>';
	include_once '../controller/DSDayTroController.php';
}
?>