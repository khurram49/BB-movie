<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Zwolek">
	<link rel="icon" href="../img/favicon.ico">
	<title>Vega Admin</title>
	<!-- Plugins Styles -->
	<link href="/assets/admin/css/plugins.min.css" rel="stylesheet">
	<!-- Core Styles -->
	<link href="/assets/admin/css/app.min.css" rel="stylesheet">
</head>

<body class="md-authentication-bg">

<!-- ////////// Preloader //////////-->
<div id="preloader"></div>

<div class="container">

	<div class="row">

		<div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">

			<div class="md-authentication">

				<div class="md-authentication-wrapper">
				
				  <div class="md-authentication-header">
						<h3>Sign In</h3>
					</div> <!-- /authentication-header -->

					<div class="md-authentication-content">
						
						<form class="md-form-floating" data-toggle="validator">

							<div class="form-group">
								<input id="username" class="md-form-control" required="" type="text">
								<span class="md-animation"></span>
								<label for="username" class="md-control-label">Username</label>
								<i class="md-icon mdi mdi-account"></i>
							</div> <!-- /form-group -->                                       

							<div class="form-group">
								<input id="password" class="md-form-control" required="" type="password">
								<span class="md-animation"></span>
								<label for="password" class="md-control-label">Password</label>
								<i class="md-icon mdi mdi-key"></i>
							</div> <!-- /form-group -->                                                             

							<div class="form-group form-check">
								<div class="checkbox checkbox-primary">   
									<input id="check_remember" class="check" type="checkbox"/>
									<label for="check_remember">Remember Me</label>
								</div> <!-- /checkbox -->
							</div> <!-- /form-group form-check -->  
							
							<div class="form-footer">
								<a href="#" class="link">Forgot Password ?</a>
								<button type="submit" class="btn btn-primary btn-round pull-right">Submit</button>
							</div> <!-- /form-footer -->

						</form> <!-- /md-form-floating -->

					</div> <!-- /md-authentication-content -->
			
				</div> <!-- /md-authentication-wrapper -->

			</div> <!-- /md-authentication -->
		
		</div> <!-- /col -->

	</div> <!-- /row -->

</div> <!-- /container -->

<!-- Core Plugins (necessary for Vega plugins)  -->
<script src="/assets/admin/js/app.min.js"></script>
<!-- Custom Scripts -->
<script src="/assets/admin/js/custom.min.js"></script>

</body>
</html>
				
