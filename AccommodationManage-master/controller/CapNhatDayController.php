<?php
session_start();
include_once '../model.bean/daytroBEAN.php';
include_once '../model.bean/KhuVucBean.php';
include_once '../model.dao/DayTroDAO.php';
include_once '../model.dao/KhuVucDao.php';
$idDay = $_POST['idDay'];
$idKhu = $_POST['idKhu'];
$diaChi = $_POST['diaChi'];
echo  $diaChi;
echo $idKhu;
echo $idDay;
$dayTroDao = new daytroDAO();
$dayTroBean = new daytroBEAN();
$dayTroBean->setidDay($idDay);
$dayTroBean->setDiaChi($diaChi);
$dayTroBean->setidKhu($idKhu);
if($dayTroDao->updateItem($dayTroBean)){
	header("location:../controller/DSdayTroController.php");
}

?>