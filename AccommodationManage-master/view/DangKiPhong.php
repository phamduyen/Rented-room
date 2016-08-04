<?php 
include '../view.inc/headerGuess.php';
$idPhong = $_GET['idPhong'];
?>

<div class="container">	
	<div class="row">
		<div class="col-xs-8">
			<div class="well">
				<h3>ĐĂNG KÍ PHÒNG TRỌ</h3>	
				<div class="well">					  
				  <form role="form" id="form-loginadmin" method="post" action="../controller/DangKiPhongController.php" >
				    <div class="form-group">
				      <label for="email">Phòng:</label>
				      <input type="text" class="form-control" id="idPhong" name="idPhong" readonly="readonly" value="<?php  echo $idPhong?>"><!-- lấy dữ liệu từ trang trước -->
				    </div>
				    <div class="form-group">
				      <label for="hoTen">Họ Tên:</label>
				      <input type="name" class="form-control" id="hoTen"  name ="hoTen">
				    </div>
				    <div class="form-group">
				      <label for="que">Quê quán:</label>
				      <input type="text" class="form-control" id="que"  name="que">
				    </div>
				    <div class="form-group">
				      <label for="CV">Công việc:</label>
				      <input type="text" class="form-control" id="CV" name ="CV">
				    </div>
				    <div class="form-group">
				      <label >Email:</label>
				      <input type="email" class="form-control" id="email" name ="email">
				    </div>
				    <div class="form-group">
				      <label >SDT:</label>
				      <input type="tel" maxlength="11" class="form-control" id="sdt" name = "sdt" >
				    </div>
				    <button type="submit" class="btn btn-default">THÊM</button>
				  </form>
				 </div>
			</div>			
		</div>
		<div class="col-xs-4">
			<div class="well">
				<img src="../content/images/quangcao.jpg" alt="quảng cáo"  width="300px" height="300px"/>
				<img src="../content/images/quangcao1.jpg" alt="quảng cáo" width="300px" height="300px"/>
			</div>
		</div>
	</div>	
</div><!-- container content  -->
</body>
<script type="text/javascript">
		$(document).ready(function(){
			$("#form-loginadmin").validate({
				rules: {
					hoTen: {
						required: true,
						
					},
					que: {
						required: true,
						
					},
					CV: {
						required: true,
						
					},
					email: {
						required: true,
						
					},
					sdt:{
						required: true,
					}
					
				},
				messages: {
					hoTen: {
						required: "<p class = 'error'>Bạn chưa nhập tên đăng nhập</p>",
					},
					que: {
						required: "<p class = 'error'>Bạn chưa nhập Quên Quán</p>",
						
					},
					CV: {
						required: "<p class = 'error'>Bạn chưa nhập công việc</p>",
						
					},
					email: {
						required: "<p class = 'error'>Bạn chưa nhập email</p>",
						
					},
					sdt:{
						required: "<p class = 'error'>Bạn chưa nhập số điện thoại</p>",
					}
				}
			});
		});
	</script>
</html>