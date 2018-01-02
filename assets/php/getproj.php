<?php
include ("config.php");
session_start();
$user = $_SESSION["id"];
$query = "SELECT * FROM projects_tbl WHERE PM_ID LIKE '%$user%' OR Attached_Programmer_ID LIKE '%$user%' ORDER BY End_dtime";
$result = mysqli_query($link, $query);
$table = "<tr>";
$names="";
while($row =mysqli_fetch_assoc($result)){
	$proj_name = $row["Project_Name"];
    $query2 ="Select PM_ID FROM projects_tbl WHERE Project_Name='$proj_name'";
    $pm_id = mysqli_query($link,$query2);
    $pmid_db=mysqli_fetch_row($pm_id);
	
	$query3="Select Fname FROM person_tbl WHERE P_ID=$pmid_db[0]";
	$f_query = mysqli_query($link,$query3);
    $fname_db=mysqli_fetch_row($f_query);
	
	$query4="Select Lname FROM person_tbl WHERE P_ID=$pmid_db[0]";
	$l_query = mysqli_query($link,$query4);
    $lname_db=mysqli_fetch_row($l_query);
	
	$query5 ="Select Attached_Programmer_ID FROM projects_tbl WHERE Project_Name like '%$proj_name%'";
    $pm_id = mysqli_query($link,$query5);
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
		
    $table = $table."<td class='projname'>".$row["Project_Name"]."</td><td>".$fname_db[0]." ".$lname_db[0]."</td><td>".$names."</td><td>".$row["End_dTime"]."</td>";
    $table = $table."</tr>";
}
echo $table;
mysqli_close($link);
?>

