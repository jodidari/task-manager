<!DOCTYPE html>

<html lang="en">
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

	<title>Jodi Task Management System</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
	<meta content="width=device-width" name="viewport">
	<meta content="no-cache" http-equiv="pragma"><!-- Bootstrap core CSS     -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet"><!-- Animation library for notifications   -->
	<link href="assets/css/animate.min.css" rel="stylesheet">
	<script src="assets/js/logout.js">
	</script><!--  Light Bootstrap Table core CSS    -->
	<link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"><!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet"><!--   Core JS Files   -->

	<script src="assets/js/jquery-1.10.2.js" type="text/javascript">
	</script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript">
	</script><!--  Checkbox, Radio & Switch Plugins -->

	<script src="assets/js/bootstrap-checkbox-radio-switch.js">
	</script><!--  Charts Plugin -->

	<script src="assets/js/chartist.min.js">
	</script><!--  Notifications Plugin    -->

	<script src="assets/js/bootstrap-notify.js">
	</script><!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->

	<script src="assets/js/light-bootstrap-dashboard.js">
	</script>
	<link href="assets/css/generalcss.css" rel="stylesheet">
	<script src="assets/js/dynamicforms.js">
	</script>
	<script src="assets/js/dynamicforms2.js">
	</script>
	<script src="assets/js/notif.js">
	</script>
	<script src="assets/js/logout.js">
	</script>
	<script src="https://surveyjs.azureedge.net/0.12.35/survey.jquery.js">
	</script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js">
	</script>
	<script src="assets/js/jquery.backstretch.min.js">
	</script>
	<script src="assets/js/getnotif.js">
	</script>
	
</head>
<body>
	<input type="hidden" id="date" name="date" class="date" value="CurrentTime">
	<div class="wrapper">
		<div class="sidebar" data-color="purple" data-image="assets/img/download.jpg">
			<!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


			<div class="sidebar-wrapper">
				<div class="logo">
					<a class="simple-text" href="#">Jodi task management system</a><span>Hello </span><span id="user-name"></span>
				</div>


				<ul class="nav">
					<li>
						<a href="mtemplate.html"><i class="pe-7s-graph"></i>

						<p>Dashboard</p></a>
					</li>


					<li>
						<a href="user.html"><i class="pe-7s-user"></i>

						<p>User Profile</p></a>
					</li>


					<li>
						<a href="createp.php"><i class="pe-7s-comment"></i>

						<p>Create Project</p></a>
					</li>
					<li>
						<a href="viewnotification.php"><i class="pe-7s-comment"></i>

						<p>View Notifications</p></a>
					</li>


					<li style="list-style: none"><br>
					<br>
					<br>
					</li>


					<li>
						<a href="rate.html"><i class="pe-7s-pen"></i>

						<p>Rate Sub-ordinates</p></a>
					</li>
				</ul>
			</div>
		</div>


		<div class="main-panel">
			<nav class="navbar navbar-default navbar-fixed">
				<div class="container-fluid">
					<div class="navbar-header">
						<button class="navbar-toggle" data-target="#navigation-example-2" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="#">Profile</a>
					</div>


					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-left">
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="pe-7s-paper-plane" style="color:black"></i> <b class="caret"></b> <span class="notification">1</span></a>

								<ul class="dropdown-menu">
									<li>
										<a href="#">Notification 1</a>
									</li>
								</ul>
							</li>
						</ul>


						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="user.html">Account</a>
							</li>


							<li>
								<a href="#" id="log">Log out</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>


			<div class="content">
				<div class="container-fluid">
					<div class="card">
						<div class="header">
							<h2 class="title">Notifications</h2>						
						</div>
	
							<table id="messages">
							<tr>
									<th>Sender</th>
									<th>Subject</th>
									<th>Body</th>
									<th>Time Received</th>
								</tr>
							</table>
							<div id="result">
							</div>
				


			<footer class="footer">
				<div class="container-fluid">
				</div>
			</footer>
		</div>
	</div>
	</div>
	</div>
</body>
</html>