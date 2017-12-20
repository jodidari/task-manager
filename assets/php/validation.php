<?php

// include('/assets2/php/config.php');

include ("config.php");
$username = $_POST['form-username'];
$password = $_POST['form-password'];

if ($username=="" || $password=="") {
	$message = array(
			"id"=> "Error",
            "result" => "Please fill both username and password"
    );
}
else {
	mysqli_select_db($link, "jodi_task_man_db");
	$query = "SELECT Password FROM login_tbl WHERE Username='$username'";
	$Sql = "SELECT Username FROM login_tbl WHERE Username='$username'";
	$PID = "SELECT P_ID FROM login_tbl WHERE Username='$username'";
	$password_query = mysqli_query($link, $query);
	$password_db = mysqli_fetch_row($password_query);
	$username_query = mysqli_query($link, $Sql);
	$username_db = mysqli_fetch_row($username_query);
	$pid_query = mysqli_query($link, $PID);
	$pid_db = mysqli_fetch_row($pid_query);
	$encrypt = md5($password);
	
	if (strcmp("'.$username.'", "'.$username_db[0].'")==0){
			if (strcmp("'.$encrypt.'", "'.$password_db[0].'")==0){
				$date = new DateTime();
				$date = $date->setTimezone(new DateTimeZone('America/Bogota')); 
				$date = $date->format("y:m:d H:i:s");
				$query1 = "INSERT INTO `jodi_task_man_db`.`login_rec_table` (`Login_num`, `Username`, `Login_Time`, `Logout_Time`) VALUES ('', '$username', '$date', '');";
				if ($link->query($query1) === TRUE) {
					$message = array(
							"id" => "Success"
					);
				}
				else{
					$message = array(
							"id"=>"Error",
							"result" => "Failed to populate login table"
					);
				}
				$title = "SELECT Title from person_tbl WHERE P_ID=$pid_db[0]";
				$title_query = mysqli_query($link, $title);
				$title_db = mysqli_fetch_row($title_query);
				
				if (strcmp("$title_db[0]","Manager")==0) {
					$message = array(
							"result" => "Manager"
					);
					session_start();
					$_SESSION["id"] = $pid_db[0];
				}
				else if (strcmp("$title_db[0]","Programmer")!=0) {
					$message = array(
							"result" => "Programmer"
					);
					session_start();
					$_SESSION["id"] = $pid_db[0];
				}
				else{
					$message = array(
						"id"=> "Success",
						"result" => "Contact Manager"
					);
				}
				
			}
	}
	else if (strcmp("'.$username.'", "'.$username_db[0].'")!=0) {
		$message = array(
			"id"=> "Error",
            "result" => "User name not found"
		);
	}
	else {
		$message = array(
			"id" => "Error",
            "result" => "Issue with password"
		);
	}
	
}
json_encode($message);
print_r(json_encode($message));
mysqli_close($link);

?>
