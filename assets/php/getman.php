 <?php

include ("config.php");
session_start();
$user = $_SESSION["id"];
$query = "SELECT * FROM person_tbl WHERE Title='Manager'";
$options="";
$i=1;

$result = mysqli_query($link, $query);
while( $row =mysqli_fetch_assoc($result) )
    {
		$options= $options."<option id=".$i.">".$row['Fname']." ".$row['Lname']."</option>";
		$i++;
    }

echo $options;
mysqli_close($link);
?>
