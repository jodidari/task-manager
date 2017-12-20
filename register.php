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
	<link href="assets/css/style.css" rel="stylesheet"><!-- Favicon and touch icons -->
	<link href="assets/ico/favicon.png" rel="shortcut icon">
	<link href="assets/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
	<link href="assets/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
	<link href="assets/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
	<link href="assets/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
	<script src="assets/js/jquery-1.10.2.js" type="text/javascript">
	</script>
	<script src="assets/js/light-bootstrap-dashboard.js">
	</script>
	<link href="assets/css/generalcss.css" rel="stylesheet">
	<script src="assets/js/jquery-1.11.1.min.js">
	</script> 
	<script src="assets/bootstrap/js/bootstrap.min.js">
	</script> 
	<script src="assets/js/jquery.backstretch.min.js">
	</script> 
	<script src="assets/js/scripts.js">
	</script> 
	<script src="assets/js/validatereg.js">
	</script>
	<title>
	</title>
</head>

<body>
	<?php
	        include('assets/php/config.php');
	    ?><!-- Top content -->

	<input type="hidden" id="date" name="date" value="CurrentTime"><input type="hidden" id="time" name="time" value="CurrentDate">
	<div class="top-content">
		<div class="inner-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 text">
						<a href="mtemplate.html"><h1 style="color:white"><strong>Jodi's Task<br>
						Management System</strong></a>
						</h1>
						<p> Click the above to return to the main page</p>


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
									<h3>Sign up now</h3>


								</div>


								<div class="form-top-right">
									<i class="fa fa-pencil"></i>
								</div>
							</div>


							<div class="form-bottom">
								<form class="login-form" name="form-register" id="form-register">
									<div class="form-group">
										<label class="sr-only" for="form-first">First name</label> <input class="form-first form-control" id="form-first" name="form-first" placeholder="First name..." type="text">
									</div>


									<div class="form-group">
										<label class="sr-only" for="form-last">Last name</label> <input class="form-last form-control" id="form-last" name="form-last" placeholder="Last name..." type="text">
									</div>


									<div class="form-group">
										<label class="sr-only" for="form-usern">Username</label> <input class="form-usern form-control" id="form-usern" name="form-usern" placeholder="Username..." type="text">
									</div>


									<div class="form-group">
										<label class="sr-only" for="form-passw">Password</label> <input class="form-passw form-control" id="form-passw" name="form-passw" placeholder="Password..." type="password">
									</div>
									
									<div class="form-group">
										<label class="sr-only" for="form-passw2">Re-enter Password</label> <input class="form-passw2 form-control" id="form-passw2" name="form-passw2" placeholder="Re-enter password" type="password">
									</div>

									<div class="form-group">
										<label class="sr-only" for="form-emaila">Email</label> <input class="form-emaila form-control" id="form-emaila" name="form-emaila" placeholder="Email..." type="email">
									</div>


									<div class="form-group">
										<label class="sr-only" for="form-title">Title</label>

										<div class="input-group col-md-12">
											<label class="sr-only" for="form-title">Title</label> <select class="form-control" id="form-title" name="form-title">

												<option value="">
													Title
												</option>

												<option value="Manager">
													Manager
												</option>

												<option value="Programmer">
													Programmer
												</option>
											</select>
										</div>
									</div>
									<button class="btn" id="signup" type="submit">Sign me up</button>
									<span id="word"></span>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Javascript -->

</body>
</html>