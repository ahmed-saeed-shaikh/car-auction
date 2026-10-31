<!doctype html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#1C2B36" />
	<title>Auction House Admin Panel</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="img/favicon.ico" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="img/favicon.ico" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="img/favicon.ico" rel="apple-touch-icon" type="image/png">
	<link href="img/favicon.ico" rel="icon" type="image/png">
	<link href="img/favicon.ico" rel="shortcut icon">
    <!-- /Favicon -->

    <!-- Global stylesheets -->
	<link type="text/css" rel="stylesheet" href="lib/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="lib/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="lib/css/main.css">
    <!-- /Global stylesheets -->
</head>

<body>

	<div class="auth-container">
		<div class="center-block">
			<div class="auth-module">
				<div class="">
					
				</div>

				<!-- Login form -->
				<div class="form">
					<h1 class="text-light">Login to your account</h1>
					
						<div class="form-group">
							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" placeholder="Username" id="un">
								<div class="form-control-feedback">
									<i class="icon-user"></i>
								</div>
							</div>
							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" placeholder="Password" id="pass">
								<div class="form-control-feedback">
									<i class="icon-key"></i>
								</div>
							</div>
							<div class="login-options">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="styled" checked="checked">
										Remember me
									</label>
								</div>
							</div>
							<div class="alert alert-danger no-border" style="display: none" id="msj">

                                    <span class="text-semibold">Invalid ! </span>Username or Password is wrong
                                                                    </div>
				  			<button onclick="check_login()" class="btn theme-btn btn-block">Sign In</button>
						</div>
					
				</div>
				<!-- /Login form -->

				<!-- Registration form -->
				
				<!-- /Registeration form -->

				<div class="forgot">
					<a href="auth_recover.html">Forgot your password?</a>
				</div>
			</div>
			<div class="footer">
				<div class="pull-left">
					
				<div class="pull-right">
					<div class="label label-info">Version: 2.0.0</div>
				</div>
			</div>
		</div>
	</div>


<script>
	
	function check_login()
	{
		$.ajax({
		type : "post",
		url  : "../main.php",
		data : {
			check_login : "", user_name : document.getElementById('un').value,password : document.getElementById('pass').value
		},
		success:function(response)
		{
			if(response == 1){
			window.location.href="../index.php";
		
		}
		else{
			document.getElementById('msj').style.display="block"
			
		}
		}
	});	
	}




</script>
<!-- Global scripts -->
<script src="lib/js/core/jquery/jquery.js"></script>
<script src="lib/js/core/jquery/jquery.ui.js"></script>
<script src="lib/js/core/bootstrap/bootstrap.js"></script>
<script src="lib/js/core/hammer/hammerjs.js"></script>
<script src="lib/js/core/hammer/jquery.hammer.js"></script>
<script src="lib/js/core/slimscroll/jquery.slimscroll.js"></script>
<script src="lib/js/forms/uniform.min.js"></script>
<script src="lib/js/core/app/layouts.js"></script>
<script src="lib/js/core/app/core.js"></script>
<!-- /Global scripts -->

<!-- Page scripts -->


</body>
</html>
