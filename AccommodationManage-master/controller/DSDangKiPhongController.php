<?php
session_start();
include_once '../model.bean/DangKiPhongBEAN.php';
include_once '../model.dao/DangKiPhongDAO.php';
$dkPhongDao = new DangKyPhongDAO();
// get du lieu
$dkPhongList = $dkPhongDao->getItemByIdChu($_SESSION['username']);
include_once '../view/Chu_DanhSachDangKiPhong.php';
?>