<?php  
include_once '../view.inc/headerAdmin.php';
?>
	<div class="container">
<div class="well">
		<div class="content-centre">
		<h4>DANH SÁCH ĐÊ TÀI</h4>
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
                            <th>Địa Chỉ</th>
                            <th>Số Điện Thoại</th>
                            <th>Email</th>
                            <th>Duyệt</th>
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
                    		<td></td>
                    		<td><input type="checkbox" /></td>
                    		<td><input type="image" name="del_Btn" src="images/recyclebin-512.png" class="image-btn"  alt="Submit"></td>
                    		
                    	</tr>        	
                    </tbody>
               	 </table>
				</div>		
					<!-- Paging -->	
		<nav>
		  <ul class="pagination">
		    <li class=""><a href="" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
		   
    			<li class="active"><a href="">1 <span class="sr-only">(current)</span></a></li>			
		    		
		    <li><a href="" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
		  </ul>
		</nav>
	</div>
	
	</div><!-- Container- conten  -->
</body>
</html>

	
	


