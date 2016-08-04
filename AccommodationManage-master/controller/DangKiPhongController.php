<?php
session_start();
include_once '../model.bean/DangKiPhongBEAN.php';
include_once '../model.dao/DangKiPhongDAO.php';
include_once '../utils/ProcessIdLibraries.php';
$id = new ProcessIdLibraries();
$idPhong = $_POST['idPhong'];
$hoTen = $_POST['hoTen'];
$que = $_POST['que'];
$cv = $_POST['CV'];
$sdt = $_POST['sdt'];
// lấy ngày hiện thại
$now = getdate();
$date= $now["year"]."-". $now["mon"]."-".$now["mday"] ;
$idDK = 'DK'.$id->getID("idDK", "dangkiphong", 3);
$dkPhongDao = new DangKyPhongDAO();
$dkPhongBean = new DangKyPhongBean();
$dkPhongBean->setidDK($idDK);
$dkPhongBean->setidPhong($idPhong);
$dkPhongBean->setNguoiThue($hoTen);
$dkPhongBean->setCongViec($cv);
$dkPhongBean->setSDT($sdt);
$dkPhongBean->setNgayDK($date);
$dkPhongBean->setQueQuan($que);
$dkPhongBean->setStatus(0);

 if($dkPhongDao->addItem($dkPhongBean)){
 	echo '<script type="text/javascript">';
 	echo 'alert("Đăng Kí Thành công, vui lòng liên lạc với chủ trọ trong vòng 48 tiếng")';
 	echo '</script>';
 	include_once '../controller/showTrangChucontroller.php';
 }else include_once '../view/DangKiPhong.php';
?>