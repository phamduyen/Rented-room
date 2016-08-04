
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Cho Thuê Phòng Trọ</title>
	<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript" src="js/ckeditor.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#form-loginadmin").validate({
				rules: {
					username: {
						required: true,
						minlength:4,
						maxlength:10,
					},
					password: {
						required: true,
						minlength:4,
						maxlength:10,
					},
				},
				messages: {
					username: {
						required: "<p class = 'error'>Bạn chưa nhập tên đăng nhập</p>",
						minlength: "<p class = 'error'>Tên đăng nhập ít nhất 4 ký tự</p>",
						maxlength: "<p class = 'error'>Tên đăng nhập tối đa 10 ký tự</p>",
					},
					password: {
						required: "<p class = 'error'>Bạn chưa nhập mật khẩu</p>",
						minlength: "<p class = 'error'>Mật khẩu ít nhất 4 ký tự</p>",
						maxlength: "<p class = 'error'>Mật khẩu tối đa 10 ký tự</p>",
					},
				}
			});
		});
	</script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-xs-6">
			<a href="#" id="logo"><img src="images/logo.png" alt="" /></a>
		</div>   
	</div>
</div>	

<!-- Page Content -->
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" >
				<div class="well">
					<form class="form-login" id="form-loginadmin" role="form" action="" method="post">
					<h3 class="">Đăng nhập</h3>
						<fieldset>
								<div class="form-group">
									<input class="form-control"  id="usernameAD" placeholder="Tên Đăng nhập" name="usernameAD" type="text" autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" id="passwordAD" placeholder="Mật khẩu" name="passwordAD" type="password" value="">
								</div>
								<div class="checkbox">
									<label> <input name="remember" type="checkbox" value="Remember Me">Ghi nhớ
									</label>
								</div>
								<!-- Change this to a button or input when using this as a form -->
								<button type="submit" class="btn btn-lg btn-succes" name="submit" >Đăng nhập ADMIN</button>
							</fieldset>
					</form>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
</div>
</body>
</html>