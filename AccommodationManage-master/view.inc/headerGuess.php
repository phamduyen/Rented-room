<?php 

include_once '../model.bean/KhuVucBean.php';
include_once '../model.dao/KhuVucDao.php';
$khuVucDao = new KhuVucDao();
$khuVucList = $khuVucDao->getListItem();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Cho Thuê Phòng Trọ</title>
<script type="text/javascript"
	src="../content/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript"
	src="../content/js/jquery.validate.js"></script>
<script type="text/javascript"
	src="../content/js/ckeditor.js"></script>
<link rel="stylesheet" href="../content/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../content/css/style.css"/>
<script src="../content/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
		<div class="link">
					<nav class="navbar navbar-inverse">
					  <div class="container-fluid">
					  <div class="row">
						   <div class="col-xs-12">
						    <ul class="nav navbar-nav">
						       <li><a href="../controller/showTrangChucontroller.php">TRANG CHỦ</a></li>
						       <?php 
						       if(isset($_SESSION['username'])){
						       ?> 	
						       <li><a href="../controller/DSDangKiPhongController.php">QUẢN LÝ ĐĂNG KÍ PHÒNG</a></li>
						       <li><a href="../controller/DSDayTroController.php">QUẢN LÝ DÃY</a></li>
						       <li><a href="../controller/QLPhongTroController.php">QUẢN LÝ PHÒNG TRỌ</a></li>
							       <ul class="nav navbar-nav">
							       		<li style="margin-top:15px;color:white"><?php echo $_SESSION['username']?> </li>	
								   </ul>	
					      		<li><a href="../controller/DangXuatController.php">|Đăng xuất</a></li>
						      </ul>
					      	</div>	
						       <?php } else {?>				      				     
						       <li><a href="../view/DangNhap.php">ĐĂNG NHẬP</a></li>
						       <li><a href="../view/DangKi.php">ĐĂNG KÍ</a></li>
						       <?php }?>
						     
					       				    
						    </ul>
					    </div>  
					  </div>
					</nav>
		</div> <!-- menu -->
	</div><!-- container -menu -->
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<a href="#" id="logo"><img src="../content/images/logo.png" alt="" /></a>
			</div>
			<div class="col-xs-4">
				<p>Liên Hệ Admin <span>01659062362</span></p>
			</div>     
		</div>
	</div>
<div class="container">
	<div class="row">
		<div class=" col-xs-8"  style="background-color: white;" >
			<div class="first" >
				<img src="../content/images/poster.jpg" alt=""/>
				<h4>Tìm phòng trọ dễ dàng hơn trong khu vực thành phố, đảm bảo tin cậy và an toàn</h4>
			</div>			
		</div>
		<div class="col-xs-4 " >
			<div class="well">
				<h3>TÌM KIẾM</h3>
				<form role="form" action="../controller/TimKiemPhongTroController.php" method="post">
				    <div class="form-group">
				      <label for="sel1">Quận:</label>
				      <select class="form-control col-xd-3" name="idKhu" value = "">
				      <option value="">...Chon Khu vực...</option>
				      <?php for($i =0;$i< count($khuVucList);$i++){?>
				        <option value= "<?php echo $khuVucList[$i]->getIdKhu(); ?>"><?php echo $khuVucList[$i]->getTen(); ?></option>
				        <?php }?>
	     			 </select>
	     			 <label for="sel1">Giá:</label>
				      <select class="form-control col-xd-3" name ="giaValue" value = "">
				      	<option value="">...Chọn giá...</option>
				        <option value = "1"><500</option>
				        <option  value = "2">500k-1000k</option>
				        <option  value = "3">>1000k</option>
	     			 </select>
	     			 <label for="sel1">Diện Tích:</label>
				      <select class="form-control col-xd-3" name ="dienTichValue" value = "" >
				      	<option value="">...Chọn diện tích...</option>
				        <option value = "1">15-20m2</option>
				        <option value = "2">20-25m2</option>
				        <option value ="3">>25m2</option>
	     			 </select>
	     			 <input type="submit" class="btn btn-warning btn" name="timKiem" value="Tìm Kiếm"/>
	     			 </div>
				</form>
			</div><!--tìm kiếm  -->
		</div>
	</div>	
</div>
	
	


