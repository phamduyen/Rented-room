<?php 
include '../view.inc/headerGuess.php';
?>
<div class="container">	
	<div class="row">
		<div class="col-xs-8">
			<div class="well">
				
				<form class="form-login" id="frm-news" role="form" action="../controller/DangNhapController.php"  method="post" >
					<h3 class="">Đăng nhập</h3>
						<fieldset>
								<div class="form-group">
									<input class="form-control"  id="username" placeholder="Tên Đăng nhập" name="username" type="text" autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" id="password" placeholder="Mật khẩu" name="password" type="password" >
								</div>
								<div class="checkbox">
									<label> <input name="remember" type="checkbox" value="Remember Me">Ghi nhớ</label>
								</div>
								<!-- Change this to a button or input when using this as a form -->
								<button type="submit" class="btn btn-lg btn-succes" name="submit" >Đăng nhập ADMIN</button>
							</fieldset>
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
<script type="text/javascript">
$(document).ready(function(){
	$("#frm-news").validate({
		rules: {
			username: {
				required: true,
				
			},
			password: {
				required: true,
			},
		},
		messages: {
			username: {
				required: "<strong><span style = 'color:red'>Bạn chưa nhập tên tài khoản</span></strong>",
			},
			password: {
				required: "<strong><span style = 'color:red'>Bạn chưa nhập mật khẩu</span></strong>",
			},
		}
	});
});
</script>
</html>