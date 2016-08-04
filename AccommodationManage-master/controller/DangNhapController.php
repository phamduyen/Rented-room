<?php
session_start();
include_once '../model.bean/ChuTroBean.php';
include_once '../model.dao/ChuTroDAO.php';

$username = $_POST['username'];
$password = $_POST['password'];

$chuTroDao = new ChuTroDAO();
$chuTro = $chuTroDao->getItemByIdPass($username, $password);
if($chuTro!=null)
{
	$_SESSION['username'] = $chuTro->getIdChu();
	$_SESSION['password'] = $chuTro->getPassword();
	echo $_SESSION['username'];
	echo $_SESSION['password'];
	include  '../controller/showTrangChucontroller.php';
}
else{
echo'<script type ="text/javascript"';
echo'alert("Đăng Nhập thất bại vui lòng kiểm tra lại tài khoản")';
echo '</script>';
include_once '../view/DangNhap.php';}

?>