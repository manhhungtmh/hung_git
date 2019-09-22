
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hệ thống quản lý Nhân Sự Trường Đại Học Mở Hà Nội</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{base_url()}public/images/DV01.png">
    <!-- Bootstrap core CSS -->
    <link href="{base_url()}public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
	
	<!-- Endless -->
	<link href="{base_url()}public/css/endless.min.css" rel="stylesheet">
	<style>
		.login-wrapper{
			top: 0% !important;
		}
		.tb{
			font-size: 13px;
		}
	</style>
  </head>
  <body>
	<div class="login-wrapper">
		<div class="text-center">
			<h2 class="fadeInUp animation-delay8" style="font-weight:bold">
				<span><img src="{base_url()}public/images/DV01.png" alt="" width="10%"> </span>
			</h2>
		</div>
		<div class="login-widget animation-delay1">	
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<div class="pull-left text-center">
						 <h3><i class="fa fa-lock fa-lg"></i> &nbsp;QUẢN LÝ NHÂN SỰ</h3>
					</div>
				</div>
				<div class="panel-body">
					<form class="form-login" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" placeholder="Username" name="username" class="form-control input-sm bounceIn animation-delay2" >
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" placeholder="Password" name="passwork" class="form-control input-sm bounceIn animation-delay4">
						</div>
						{if isset($tb) && !empty($tb)}
							<p class="label label-danger tb">{$tb}</p>
						{/if}
						<hr/>
						<div class="panel-footer clearfix">
							<div class="text-center">
								 <h3>
									<button type="submit" name="dangnhap" value="1" class="btn btn-success btn-sm bounceIn animation-delay5 login-link" style="font-size: 15px;"><i class="fa fa-sign-in"></i> Đăng nhập</button>
								</h3>
							</div>
						</div>
						
					</form>
				</div>
			</div><!-- /panel -->
		</div><!-- /login-widget -->
	</div><!-- /login-wrapper -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>
