<?php
include ("config.php");

session_start();
$user = $_SESSION["id"];
$projectname = $_POST['project_name'];
$projectd = $_POST['project_desc'];
$man = $_POST['project_manager'];
$man2 = explode(" ", $man);
$m_firstname = $man2[0];
$m_lastname = $man2[1];
$start = $_POST['start_dtime'];
$end = $_POST['end_dtime'];
$start=new DateTime();
$end= new DateTime();
$start= $start->setTimezone(new DateTimeZone('America/Bogota')); 
$start = $start->format("y:m:d H:i:s");
$end= $end->setTimezone(new DateTimeZone('America/Bogota')); 
$end = $end->format("y:m:d H:i:s");
$prog = $_POST['project_prog'];
$prog_id = "";

if ($projectname === "")
{
	$message = array(
		"result" => "Please fill out project name"
	);
}
else
if ($projectd === "")
{
	$message = array(
		"result" => "Please fill out project desciption"
	);
}
else
if ($m_firstname === "")
{
	$message = array(
		"result" => "Please fill out first name"
	);
}
else
if ($m_lastname === "")
{
	$message = array(
		"result" => "Please fill out last name"
	);
}
else
{
	if (count($prog) > 1)
	{
		$counter = count($prog);
		for ($index = 0; $index < $counter; $index++)
		{
			$prog2 = explode(" ", $prog[$index]);
			$query = "SELECT P_ID FROM person_tbl WHERE Fname = '$prog2[0]' AND Lname='$prog2[1]'";
			$id_query = mysqli_query($link, $query);
			$id_db = mysqli_fetch_row($id_query);
			if ($id_db[0] != "")
			{
				if ($index == count($prog) - 1)
				{
					$prog_id = $prog_id . $id_db[0];
				}
				else
				{
					$prog_id = $prog_id . $id_db[0] . ",";
				}
			}
			else
			{
				$message = array(
					"result" => "Error with adding programmers"
				);
			}
		}

		rtrim($prog_id, ',');
		mysqli_select_db($link, "jodi_task_man_db");
		$PID = "SELECT P_ID FROM person_tbl WHERE Fname='" . $m_firstname . "' AND Lname='" . $m_lastname . "'";
		$pid_query = mysqli_query($link, $PID);
		$pid_db = mysqli_fetch_row($pid_query);
		$query1 = "INSERT INTO `jodi_task_man_db`.`projects_tbl` (`Project_ID`, `Project_Name`, `Project_Description`, `PM_ID`, `Attached_Programmer_ID`, `Start_dTime`, `End_dTime`, `Task_ID`) VALUES  ('', '" . $projectname . "', '" . $projectd . "', '" . $user . "','" . $prog_id . "', '$start', '$end',  '')";
		if ($link->query($query1) === TRUE)
		{
			$message = array(
				"result" => "Success"
			);
		}
		else
		{
			$message = array(
				"result" => "Error entering into database"
			);
		}
	}
	else
	if (count($prog) == 1)
	{
		$prog2 = explode(" ", $prog[0]);
		$query = "SELECT P_ID FROM person_tbl WHERE Fname = '$prog2[0]' AND Lname='$prog2[1]'";
		$id_query = mysqli_query($link, $query);
		$id_db = mysqli_fetch_row($id_query);
		if ($id_db[0] != "")
		{
			$prog_id = $prog_id . $id_db[0];
		}
		else
		{
			$message = array(
				"result" => "Error with adding programmers"
			);
		}

		mysqli_select_db($link, "jodi_task_man_db");
		$PID = "SELECT P_ID FROM person_tbl WHERE Fname='" . $m_firstname . "' AND Lname='" . $m_lastname . "'";
		$pid_query = mysqli_query($link, $PID);
		$pid_db = mysqli_fetch_row($pid_query);
		$query1 = "INSERT INTO `jodi_task_man_db`.`projects_tbl` (`Project_ID`, `Project_Name`, `Project_Description`, `PM_ID`, `Attached_Programmer_ID`, `Start_dTime`, `End_dTime`, `Task_ID`) VALUES  ('', '" . $projectname . "', '" . $projectd . "', '" . $user . "','" . $prog_id . "', '$start', '$end',  '')";
		if ($link->query($query1) === TRUE)
		{
			$message = array(
				"result" => "Success"
			);
		}
		else
		{
			$message = array(
				"result" => "Error entering into database"
			);
		}
	}
}

json_encode($message);
print_r(json_encode($message));
mysqli_close($link); // Closing Connection

?>
