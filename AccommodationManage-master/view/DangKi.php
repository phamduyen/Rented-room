<?php 
include '../view.inc/headerGuess.php';

?>
<div class="container">	
	<div class="row">
		<div class="col-xs-8">
			<div class="well">			
			  <h2>ĐĂNG KÍ</h2>
			  <form role="form">
			    <div class="form-group">
			      <label for="idChu">Tên Đăng Nhập:</label>
			      <input type="text" class="form-control" id="idChu"></input>
			    <div class="form-group">
			      <label for="pwd">Password:</label>
			      <input type="password" class="form-control" id="pwd" >
			    </div>
			    <div class="form-group">
			      <label for="hoTen">Họ Tên:</label>
			      <input type="text" class="form-control" id="hoTen"/>
			    </div>
			    <div class="form-group">
			      <label for="sdt">SDT:</label>
			      <input type="text" class="form-control" id="sdt" >
			    </div>
			    <div class="form-group">
			      <label for="email">Email:</label>
			      <input type="email" class="form-control" id="email" >
			    </div>
			    <button type="submit" class="btn btn-default">Đăng kí</button>
			  </form>
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
</html>