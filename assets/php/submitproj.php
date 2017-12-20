<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
include("config.php");
session_start();
$user_id = $_SESSION["id"];

$projectname = $_POST['form-proj-name'];
$projectd=$_POST['form-desc'];
$name=$_POST['proj-man-name'];
$name2= explode(" ", $name);
$firstname=$name2[0];
$lastname=$name2[1];

//echo ("First name: ".$firstname."Lastname: ".$lastname);

$start=$_POST['form-start-date'];
$end=$_POST['form-end-date'];

if ($projectname==="") {
	$message = array(
            "result" => "Please fill out project name"
        );
}

else if ($projectd==="")
{
		$message = array(
            "result" => "Please fill out project desciption"
        );
}

else if ($firstname==="")
{
	$message = array(
            "result" => "Please fill out first name"
        );
}

else if ($lastname==="")
{
		$message = array(
            "result" => "Please fill out last name"
        );
}

else {
	mysqli_select_db($link, "jodi_task_man_db");
	$PID="SELECT P_ID FROM person_tbl WHERE Fname='".$firstname."' AND Lname='".$lastname."'";
	$pid_query = mysqli_query($link, $PID);
	$pid_db = mysqli_fetch_row($pid_query);
	$query1 = "INSERT INTO `jodi_task_man_db`.`projects_tbl` (`Project_ID`, `Project_Name`, `Project_Description`, `PM_ID`, `Attached_Programmer_ID`, `Start_dTime`, `End_dTime`, `Task_ID`) VALUES  ('".$pid_db[0]."', '" . $projectname . "', '".$projectd."', '','', '$start', '$end',  '')";
	if ($link->query($query1) === TRUE) {
		$message = array(
            "result" => "Success"
        );
	}
	else {
		$message = array(
            "result" => "Error entering into database"
        );
	}
}
json_encode($message);
print_r(json_encode($message));
mysqli_close($link); // Closing Connection

?>
