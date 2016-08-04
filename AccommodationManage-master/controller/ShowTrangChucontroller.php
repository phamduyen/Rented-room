<?php

include_once '../model.bean/ChuTroBean.php';
include_once '../model.bean/daytroBEAN.php';
include_once '../model.dao/ChuTroDAO.php';
include_once '../model.dao/daytroDAO.php';
include_once '../model.bean/KhuVucBean.php';
include_once '../model.dao/KhuVucDao.php';
$dayTroDao = new daytroDAO();
$chuTroDao = new ChuTroDAO();
$khuDao = new KhuVucDao();
$khu = new KhuVucBean();
$dayTroList = $dayTroDao->getListItem();
if(isset($dayTroList)){
	echo $dayTroList[0]->getIdKhu();
$chuTro = new ChuTroBean();
include_once '../view/TrangChu.php';}else{
	echo "lỗi ko lấy được dl";
}
?>