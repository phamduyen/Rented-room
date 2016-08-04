<?php
	include_once '../model.bean/CategoryBean.php';
	include_once '../model.dao/CategoryDAO.php';
	
	session_start();
	if(isset($_SESSION["fullname"])){
	$catDao = new CategoryDAO();
	
	$catList = $catDao->getListItem();
	
	$msgReceive = "";
	if(!empty($msg)){
		$msgReceive = $msg;
	}
	include_once '../view/Admin_CategoryListView.php';
	}
	else{
		include_once '../view/Public_HomeView.php';
	}
?>