<?php
include_once '../model.bean/daytroBEAN.php';
include_once '../model.dao/daytroDAO.php';
include_once '../model.bean/PhongTroBean.php';
include_once '../model.dao/PhongTroDao.php';
$phongTroDao = new PhongTroDao();
$idDay = $_GET['idDay'];
$dayTroDao = new daytroDAO();
if($dayTroDao->deteteItem($idDay)){
	if($phongTroDao->deteteItemByIdDay($idDay)){
	echo '<script type="text/javascript">';
	echo 'alert("Xóa Thành công")';
	echo '</script>';
	include_once '../controller/DSDayTroController.php';
	}
}
?>