<?php 
include_once '../view.inc/headerAdmin.php';?>
	<div class="container">
<div class="well">
		<div class="content-centre">
		<h4>DANH SÁCH ADMIN</h4>
				<form action="">
					
					<div class="input-group panel panel-default" >
					<input type="text" class="form-control" style="    margin-top: 12px;" placeholder="Tìm kiếm...">
					<div class="input-group-btn">
						<button type="button" class="btn btn-default ">Tìm </button>
					</div>
				</div>
			</form>
		</div>
	
	<!-- Do du lieu tai day  -->
					<div class="panel panel-default">
						<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tên Đăng Nhập</th>
                            <th>Password</th>
                            <th>Họ tên</th>
                            <th>Số Điện Thoại</th>
                            <th>Email</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<tr>
                    		<td>1234</td>
                    		<td>Đề tài 1</td>
                    		<td>CNPM</td>
                    		<td>Mỹ Hạnh</td>
                    		<td></td>
                    		<td><input type="image" name="del_Btn" src="images/recyclebin-512.png" class="image-btn"  alt="Submit"></td>
                    		
                    	</tr>        	
                    </tbody>
               	 </table>
				</div>		
		<div class="row">
		
		<div class="col-xs-12">
			<div class="well">
			  <h2>THÊM ADMIN</h2>
			  <form role="form">
			    <div class="form-group">
			      <label for="">Tên Đăng Nhập:</label>
			      <input type="text" class="form-control" id="" placeholder="Enter email">
			    </div>
			    <div class="form-group">
			      <label for="pwd">Password:</label>
			      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
			    </div>
			    <div class="form-group">
			      <label for="pwd">Họ Tên:</label>
			      <input type="text" class="form-control" id="pwd" placeholder="Enter password">
			    </div>
			    <div class="form-group">
			      <label for="pwd">SDT:</label>
			      <input type="text" class="form-control" id="pwd" placeholder="Enter password">
			    </div>
			    <div class="form-group">
			      <label for="pwd">Email:</label>
			      <input type="email" class="form-control" id="pwd" placeholder="Enter password">
			    </div>
			    <button type="submit" class="btn btn-default">THÊM</button>
			  </form>
			 </div>
		</div>
	</div>
</div>
</div>

</body>
</html>
