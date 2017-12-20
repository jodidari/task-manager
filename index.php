<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport"><!-- CSS -->
	<link href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500" rel="stylesheet">
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/form-elements.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<script src="assets/js/jquery-1.10.2.js" type="text/javascript">
	</script>
	<script src="assets/js/rate.js">
	</script><script src="assets/js/logout.js"></script>
	<script src="assets/js/jquery-1.11.1.min.js">
	</script>
	<script src="assets/bootstrap/js/bootstrap.min.js">
	</script>
	<script src="assets/js/jquery.backstretch.min.js">
	</script>
	<script src="assets/js/scripts.js">
	</script>
	<script src="assets/js/index.js">
	</script>

	<title>Jodi task manager</title>
</head>

<body>
	<!-- Top content -->
	<input type="hidden" id="date" name="date" value="CurrentTime"><input type="hidden" id="time" name="time" value="CurrentDate">
	<div class="top-content">
		<div class="inner-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 text">
						<h1><strong>Jodi's Task<br>
						Management System</strong>
						</h1>


						<div class="description">
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-3">
					</div>


					<div class="col-md-6">
						<div class="form-box">
							<div class="form-top">
								<div class="form-top-left">
									<h3>Login</h3>
									<p>Enter username and password to log on:</p>
								</div>

								<div class="form-top-right">
									<i class="fa fa-lock"></i>
								</div>
							</div>


							<div class="form-bottom" id="form-bottom">
								<form action="/Egov-proj/assets/php/validation.php" class="login-form" id="login-form" method="POST" name="login-form">
									<div class="form-group">
										<label class="sr-only" for="form-username">Username</label> <input class="form-username form-control" id="form-username" name="form-username" placeholder="Username..." type="text">
									</div>
									<div class="form-group">
										<label class="sr-only" for="form-password">Password</label> <input class="form-password form-control" id="form-password" name="form-password" placeholder="Password..." type="password">
									</div>
									<button class="btn loginBtn" id="loginBtn" name="loginBtn" style=" text-align:center;" type="button">Log in</button>

									<div class="row">
									</div>
									<!-- Small modal -->
									<button class="btn btn-primary" data-target=".bs-example-modal-sm" data-toggle="modal" type="button">Register</button>

									<div aria-labelledby="mySmallModalLabel" class="modal fade bs-example-modal-sm" role="dialog" tabindex="-1">
										<div class="modal-dialog modal-sm" role="document">
											<div class="modal-content" style="text-align:center">
												Bringing you to the register page...
												<br/>
												<a class="btn btn-primary btn-lg " href="register.php" style="margin:auto auto 10px 2px">Register</a>
												<a class="btn btn-primary btn-lg" href="index.php" style="margin:auto auto 10px 2px">Cancel</a>
											</div>
										</div>
									</div>
									<span class="word" id="word" name="word"></span>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>