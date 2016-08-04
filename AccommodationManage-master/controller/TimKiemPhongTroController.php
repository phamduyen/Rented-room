<?php
include_once '../model.bean/PhongTroBean.php';
include_once '../model.dao/PhongTroDao.php';
include_once '../model.dao/daytroDAO.php';
include_once '../model.bean/daytroBEAN.php';
include_once '../model.bean/KhuVucBean.php';
include_once '../model.dao/KhuVucDao.php';

$idKhu = $_POST ['idKhu'];
$giaValue = $_POST ['giaValue'];
$dienTichValue = $_POST ['dienTichValue'];
if ($idKhu == "" && $giaValue == "" && $dienTichValue == "") {
	header ( "location:../controller/showTrangChucontroller.php" );
} else {
	$khuDao = new KhuVucDao ();
	$khu = new KhuVucBean ();
	$phongTroDao = new PhongTroDao ();
	$daytro = new daytroBEAN ();
	$phongTroList = $phongTroDao->TimKiem ( $idKhu, $giaValue, $dienTichValue );
	$dayTroDao = new daytroDao ();
	include_once '../view/DanhSachPhong.php';
}
?>