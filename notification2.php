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
	<script src="assets/js/logout.js">
	</script>
	<script src="assets/js/get_info.js">
	</script>
	<script src="assets/js/dynamicforms2.js">
	</script>
	<script src="assets/js/notif.js">
	</script>
	<script>
	</script>
	<script src="https://surveyjs.azureedge.net/0.12.35/survey.jquery.js">
	</script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js">
	</script>
	<script src="assets/js/jquery.backstretch.min.js">
	</script>
</head>

<body>
	<form>
		<input id="date" name="date" type="hidden" value="CurrentTime"><input id="time" name="time" type="hidden" value="CurrentDate">
	</form>


	<div class="wrapper">
		<div class="sidebar" data-color="green" data-image="assets/img/download.jpg">
			<!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


			<div class="sidebar-wrapper">
				<div class="logo">
					<a class="simple-text" href="ptemplate.html">Jodi task management system</a><span>Hello </span><span id="user-name"></span>
				</div>


				<ul class="nav">
					<li>
						<a href="user2.html"><i class="pe-7s-user"></i>

						<p>User Profile</p></a>
					</li>


					<li>
						<a href="taskmanagement.html"><i class="pe-7s-graph"></i>

						<p>task manager</p></a>
					</li>


					<li>
						<a href="notification2.php"><i class="pe-7s-bell"></i>

						<p>Create Notifications</p></a>
					</li>


					<li>
						<a href="viewnotification.php"><i class="pe-7s-bell"></i>

						<p>View notifications</p></a>
					</li>


					<li>
						<a href="viewproj.php"><i class="pe-7s-albums"></i>

						<p>View Projects</p></a>
					</li>


					<li style="list-style: none"><br>
					<br>
					<br>
					</li>


					<li>
						<a href="rate2.html"><i class="pe-7s-pen"></i>

						<p>Rate Manager</p></a>
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
							<h4 class="title">Notifications</h4>


							<p class="category">Handcrafted by our friend <a href="https://github.com/mouse0270" target="_blank">Robert McIntosh</a>. Please checkout the <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a></p>
						</div>


						<div class="content">
							<div class="row">
								<div class="col-md-6">
									<h5>Notifications Style</h5>


									<div class="alert alert-info">
										<span>This is a plain notification</span>
									</div>


									<div class="alert alert-info">
										<button aria-hidden="true" class="close" type="button">×</button> <span>This is a notification with close button.</span>
									</div>


									<div class="alert alert-info alert-with-icon" data-notify="container">
										<button aria-hidden="true" class="close" type="button">×</button> <span class="pe-7s-bell" data-notify="icon"></span> <span data-notify="message">This is a notification with close button and icon.</span>
									</div>


									<div class="alert alert-info alert-with-icon" data-notify="container">
										<button aria-hidden="true" class="close" type="button">×</button> <span class="pe-7s-bell" data-notify="icon"></span> <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
									</div>
								</div>


								<div class="col-md-6">
									<h5>Notification states</h5>


									<div class="alert alert-info">
										<button aria-hidden="true" class="close" type="button">×</button> <span><b>Info -</b> This is a regular notification made with ".alert-info"</span>
									</div>


									<div class="alert alert-success">
										<button aria-hidden="true" class="close" type="button">×</button> <span><b>Success -</b> This is a regular notification made with ".alert-success"</span>
									</div>


									<div class="alert alert-warning">
										<button aria-hidden="true" class="close" type="button">×</button> <span><b>Warning -</b> This is a regular notification made with ".alert-warning"</span>
									</div>


									<div class="alert alert-danger">
										<button aria-hidden="true" class="close" type="button">×</button> <span><b>Danger -</b> This is a regular notification made with ".alert-danger"</span>
									</div>
								</div>
							</div>
							<br>
							<br>


							<div class="places-buttons">
								<div class="row">
									<div class="col-md-6 col-md-offset-3 text-center">
										<h5>Notifications Places</h5>


										<p class="category">Click to view notifications</p>
									</div>
								</div>


								<div class="row">
									<div class="col-md-2 col-md-offset-3">
										<button class="btn btn-default btn-block" onclick="demo.showNotification('top','left')">Top Left</button>
									</div>


									<div class="col-md-2">
										<button class="btn btn-default btn-block" onclick="demo.showNotification('top','center')">Top Center</button>
									</div>


									<div class="col-md-2">
										<button class="btn btn-default btn-block" onclick="demo.showNotification('top','right')">Top Right</button>
									</div>
								</div>


								<div class="row">
									<div class="col-md-2 col-md-offset-3">
										<button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','left')">Bottom Left</button>
									</div>


									<div class="col-md-2">
										<button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','center')">Bottom Center</button>
									</div>


									<div class="col-md-2">
										<button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','right')">Bottom Right</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<footer class="footer">
				<div class="container-fluid">
				</div>
			</footer>
		</div>
	</div>
	<!--   Core JS Files   -->

	 
</body>
</html>