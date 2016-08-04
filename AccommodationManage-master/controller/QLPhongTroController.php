<?php
session_start();
include_once '../model.bean/PhongTroBean.php';
include_once '../model.dao/PhongTroDao.php';
include_once '../model.dao/daytroDAO.php';
include_once '../model.bean/daytroBEAN.php';
include_once '../model.bean/KhuVucBean.php';
include_once '../model.dao/KhuVucDao.php';
$dayTroDao = new daytroDAO();
$phongTroDao = new PhongTroDao();
$phongTroList = $phongTroDao->getListItemByIdChu($_SESSION['username']);
$khuVucDao = new KhuVucDao();
include_once '../view/Chu_ThemPhongTro.php';
?>