 <?php

include ("config.php");
session_start();
$user = $_SESSION["id"];
$query = "SELECT * FROM person_tbl WHERE Title='Programmer'";
$query2="SELECT count(*) AS 'counter' FROM person_tbl WHERE Title='Programmer'";
$result2 = mysqli_query($link, $query2);
$count = mysqli_fetch_assoc($result2);
$count_num= $count['counter'];
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
