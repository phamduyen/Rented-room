<?php
session_start();
include_once '../model.bean/DangKiPhongBEAN.php';
include_once '../model.dao/DangKiPhongDAO.php';
include_once '../utils/ProcessIdLibraries.php'; 
include_once '../model.bean/daytroBEAN.php';
include_once '../model.bean/KhuVucBean.php';
include_once '../model.dao/DayTroDAO.php';
include_once '../model.dao/KhuVucDao.php';
$khuVucDao = new  KhuVucDao();
$dayTroDao = new daytroDao();

$khuList = $khuVucDao->getListItem();
$dayTroList = $dayTroDao->getListItemByIdChu($_SESSION['username']);
include_once '../view/Chu_ThemDayTro.php';
?>