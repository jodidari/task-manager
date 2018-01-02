<?php
include ("config.php");
session_start();
$user = $_SESSION["id"];
$proj_name= $_POST["projectname"];
$query = "SELECT * FROM projects_tbl WHERE Project_Name like '%$proj_name%'";
$result = mysqli_query($link, $query);
$info = "<br/><h3 id=proj_info>Project Information</h3>";
$names="";
while($row =mysqli_fetch_assoc($result)){
	
	$query2 ="Select Attached_Programmer_ID FROM projects_tbl WHERE Project_Name like '%$proj_name%'";
    $pm_id = mysqli_query($link,$query2);
    $pmid_db=mysqli_fetch_row($pm_id);
	$pmids=explode(",",$pmid_db[0]);
	
	
	if (count($pmids) > 1)
	{
		$counter = count($pmids);
		for ($index = 0; $index < $counter; $index++)
		{
			$query3 = "SELECT Fname FROM person_tbl WHERE P_ID='$pmids[$index]'";
			$query4 = "SELECT Lname FROM person_tbl WHERE P_ID='$pmids[$index]'";
			$fname = mysqli_query($link, $query3);
			$fname_db = mysqli_fetch_row($fname);
			$lname = mysqli_query($link, $query4);
			$lname_db = mysqli_fetch_row($lname);
			if ($fname_db[0] != "" && $lname_db[0])
			{
				if ($index == count($pmids) - 1)
				{
					$names = $names . $fname_db[0]." ".$lname_db[0];
				}
				else
				{
					$names = $names . $fname_db[0]." ".$lname_db[0].", ";
				}
			}
			
		}
	}
	else{
			$query3 = "SELECT Fname FROM person_tbl WHERE P_ID='$pmid_db[0]'";
			$query4 = "SELECT Lname FROM person_tbl WHERE P_ID='$pmid_db[0]'";
			$fname = mysqli_query($link, $query3);
			$fname_db = mysqli_fetch_row($fname);
			$lname = mysqli_query($link, $query4);
			$lname_db = mysqli_fetch_row($lname);

			$names = $names . $fname_db[0]." ".$lname_db[0];
				
			
		}

    $info = $info."<p class='projname'> Project Name: ".$row["Project_Name"]."</p><p> Project Description: ".$row["Project_Description"]."</p><p>Attached Programmers: ".$names."</p><p>Start date: ".$row["Start_dTime"]."</p><p>End date:".$row["End_dTime"]."</p>";
    $info = $info."</tr>";
}
echo $info;
mysqli_close($link);
?>
