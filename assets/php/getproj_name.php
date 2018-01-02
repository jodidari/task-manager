 <?php

include ("config.php");
session_start();
$user = $_SESSION["id"];
$query = "SELECT * FROM projects_tbl WHERE PM_ID LIKE '%$user%' OR Attached_Programmer_ID LIKE '%$user%'";
$options="";
$i=1;
$result = mysqli_query($link, $query);
while( $row =mysqli_fetch_assoc($result) )
    {
		$options= $options."<option id=".$i.">".$row['Project_Name']."</option>";
		$i++;
    }

echo $options;
mysqli_close($link);
?>
