 <?php

include ("config.php");
session_start();
$user = $_SESSION["id"];
$query = "SELECT * FROM person_tbl WHERE P_ID='$user'";
$options="";

$result = mysqli_query($link, $query);
while( $row =mysqli_fetch_assoc($result) )
    {
		$options= $options."<option>".$row['Fname']." ".$row['Lname']."</option>";
    }

echo $options;
mysqli_close($link);
?>
