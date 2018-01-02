<?php
include ("config.php");
session_start();
$user = $_SESSION["id"];
$query = "SELECT * FROM notif_table WHERE recipient_ids LIKE '%$user%' ORDER BY date_sent";
$result = mysqli_query($link, $query);
$table = "<tr>";
while($row =mysqli_fetch_assoc($result)){
    $sender = $row["sender_id"];
    $user_query = "SELECT * FROM person_tbl WHERE P_ID = $sender";
    $user_result = mysqli_query($link,$user_query);
    $user_row = mysqli_fetch_assoc($user_result);
    $table = $table."<td>".$user_row["Fname"]." ".$user_row["Lname"]."</td><td class='subject'>".$row["subject"]."</td><td>".$row["body"]."</td><td>".$row["date_sent"]."</td>";
    $table = $table."</tr>";
}
echo $table;
mysqli_close($link);
?>

