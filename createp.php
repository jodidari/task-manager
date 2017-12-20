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
	<link href="assets/css/poll.css" rel="stylesheet">
	<link href="assets/css/rate.css" rel="stylesheet">
	<script src="assets/js/dynamicforms.js">
	</script>
	<script src="assets/js/logout.js">
	</script>
	<script src="assets/js/dynamicforms2.js">
	</script>
	<script src="assets/js/poll.js">
	</script>
	<script src="assets/js/rate.js">
	</script>
	<script src="assets/js/createp.js">
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
		<div class="sidebar" data-color="purple" data-image="assets/img/download.jpg">
			<div class="sidebar-wrapper">
				<div class="logo">
					<a class="simple-text" href="ptemplate.html">Jodi task management system</a>
				</div>


				<ul class="nav">
                    <li>
                        <a href="user.html">
                            <i class="pe-7s-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="notification.php">
                            <i class="pe-7s-bell"></i>
                            <p>Create Notifications</p>
                        </a>
                    </li>
					<li>
                        <a href="viewnotification.php">
                            <i class="pe-7s-bell"></i>
                            <p>View Notifications</p>
                        </a>
                    </li>
                    <br/>
                    <br/>
                    <br/>
                    <li>
                        <a href="rate.html">
                            <i class="pe-7s-pen"></i>
                            <p>Rate Sub-ordinates</p>
                        </a>
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
								<a href="index.php" class="log" id="log">
                                Log out
                            </a>
							</li>
						</ul>
					</div>
				</div>
			</nav>


			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="header">
									<h4 class="title">Create Project</h4>
								</div>


								<div class="content">
									<form action="/Egov-proj/assets/php/submitproj.phpnjj" class="createp-form" id="createp-form" method="post" name="createp-form">
										<div class="row">
											<div class="form-group">
												<div class="col-md-4">
													<label for="form-proj-name" style="padding:13px 0px;">Project Name</label> <input class="form-proj-name form-control" id="form-proj-name" name="form-proj-name" placeholder="Project Name..." type="text">
												</div>
											</div>


											<div class="col-md-2">
											</div>
											<!--<div class="form-group">
                                                <div class="col-md-2">
                                                    <label for="form-fname">Project</label>
                                                    <input class="form-fname form-control" id="form-fname" name="form-fname" placeholder="First name" type="text">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label  for="form-lname">Manager </label>
                                                    <input class="form-lname form-control" id="form-lname" name="form-lname" placeholder="Last name" type="text">
                                                </div>
                                            </div>
                                        </div>-->


											<div class="form-group">
												<div class="col-md-4">
													<label>Managers</label>

													<div class="form-group input-group" style="padding-top: 9px;">
														<select class="form-control" id="proj-man-name" name="proj-man-name">
															<option value="1">
																Default select
															</option>

															<option value="Anthony Hamilton">
																Anthony Hamilton
															</option>

															<option value="Nyram Moodie">
																Nyram Moodie
															</option>
														</select>
													</div>
												</div>
											</div>


											<div class="form-group">
												<div class="col-md-10">
													<label for="form-desc">Description</label> <input class="form-desc form-control" id="form-desc" name="form-desc" placeholder="Enter a description" style="height:150px" type="text">
												</div>
											</div>


											<div class="row">
												<div class="form-group">
													<div class="col-md-5">
														<label for="form-start-date">Start date<span class="pe-7s-date"></span></label> <input class="form-start-date form-control" id="form-start-date" name="form-start-date" type="date">
													</div>
												</div>


												<div class="col-md-1">
												</div>


												<div class="form-group">
													<div class="col-md-5">
														<label for="form-end-date">End date<span class="pe-7s-date"></span></label> <input class="form-end-date form-control" id="form-end-date" name="form-end-date" type="date">
													</div>
												</div>
											</div>


											<div class="row">
												<div class="form-group multiple-form-group col-md-4">
													<label>Programmers</label>

													<div class="form-group input-group">
														<select class="form-control" id="form-programmers" name="form-programmers">
															<option value="">
																Default select
															</option>

															<option value="">
																John Brown
															</option>

															<option value="">
																Jane Smith
															</option>

															<option value="">
																Mark Stephens
															</option>
														</select>
														<span class="input-group-btn">+<button class="btn btn-default btn-add" id="options" type="button"></span>
														<!--<span class="input-group-btn"><span class="input-group-btn"><span class="input-group-btn"><span class="input-group-btn" style="color:black">+</span></span></span></span></button></span>-->

														<ul class="list-unstyled" id="names">
														</ul>
													</div>
												</div>
											</div>


											<div class="row">
												<button class="btn btn-primary col-md-offset-4 col-md-2 col-md-offset-5" data-target=".bs-example-modal-sm" data-toggle="modal" type="button">Create</button>

												<div aria-labelledby="mySmallModalLabel" class="modal fade bs-example-modal-sm" id="modal" role="dialog" tabindex="-1">
													<div class="modal-dialog modal-sm" role="document">
														<div class="modal-content" style="text-align:center">
															<div class="modal-header">
																<span class="close" data-dismiss="modal" id="close">&times;</span> Do you want to submit?
															</div>
															<button class="btn btn-primary btn-md" id="sub" name="sub" style="margin:0 0 10px 2px" type="button">Create</button> <button class="btn btn-primary btn-md" data-dismiss="modal" style="margin:0 0 10px 2px" type="button">Close</button>
														<span id="word"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>	
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
</body>
</html>