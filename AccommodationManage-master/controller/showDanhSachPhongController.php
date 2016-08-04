<?php
session_start();
include_once '../model.bean/PhongTroBean.php';
include_once '../model.dao/PhongTroDao.php';
include_once '../model.dao/daytroDAO.php';
include_once '../model.bean/daytroBEAN.php';
include_once '../model.bean/KhuVucBean.php';
include_once '../model.dao/KhuVucDao.php';
	//goi dao
	$phongTroDao = new PhongTroDao();
	$idDay =$_GET["idDay"];
	$dayTroDao = new daytroDao();
	$daytro = new daytroBEAN();
	$khuDao = new KhuVucDao();
	$khu = new KhuVucBean();
	$phongTroList = $phongTroDao->getListItemByIdDay($idDay);
	include_once '../view/DanhSachPhong.php';
?>