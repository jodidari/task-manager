<?php

include ("config.php");

session_start();
$user_id = $_SESSION["id"];
$subject = $_POST["subject"];
$recipients = $_POST["recipients"];
$recipients2= explode(",",$recipients);
$body = $_POST["message"];
$date = new DateTime();
$date = $date->setTimezone(new DateTimeZone('America/Bogota')); 
$date = $date->format("y:m:d H:i:s");
$recipient_ids="";
if (count($recipients2)<1){
	 $message = array(
            "result" => "Did you enter a recipient"
        );
}
else if ($subject==""){
	 $message = array(
            "result" => "Subject needed"
        );
}
else if ($body==""){
	 $message = array(
            "result" => "Body needed"
        );
}
else if (count($recipients2)==1 && $recipients=="all")
{
	//echo "Entered";
	$query1="SELECT COUNT(DISTINCT P_ID) AS count FROM login_tbl";
	$count = mysqli_query($link, $query1);
	$row = $count->fetch_assoc();
	
	for ($index = 0; $index <= $row['count'];$index++){
		$query="SELECT P_ID FROM login_tbl LIMIT ".$row['count']." OFFSET ".$index."";
		$id_query = mysqli_query($link, $query);
		$id_db = mysqli_fetch_row($id_query);
		if($index == $row['count']-1){
			$recipient_ids=$recipient_ids.$id_db[0];
		}else{
			$recipient_ids=$recipient_ids.$id_db[0].",";
		}
	}
	rtrim($recipient_ids,',');
	$sql = "INSERT INTO notif_table (recipient_ids, sender_id, subject, body, date_sent) VALUES ('$recipient_ids', '$user_id', '$subject', '$body', '$date')";
	if(mysqli_query($link,$sql)){
		$message = array(
				"result" => "Successful"
			);
	}else{
		$message = array(
				"result" => "Could not create notification"
			);
	}
}
else 
{
	for ($index = 0; $index < count($recipients2);$index++){
		$value = $recipients2[$index];
		$query = "SELECT P_ID FROM login_tbl WHERE username = '$value'";
		$id_query = mysqli_query($link, $query);
		$id_db = mysqli_fetch_row($id_query);
		if ($id_db[0]!=""){
		if($index == count($recipients2)-1){
			$recipient_ids=$recipient_ids.$id_db[0];
		}else{
			$recipient_ids=$recipient_ids.$id_db[0].",";
		}
		}
	}
	$sql = "INSERT INTO notif_table (recipient_ids, sender_id, subject, body, date_sent) VALUES ('$recipient_ids', '$user_id', '$subject', '$body', '$date')";
	if(mysqli_query($link,$sql)){
		$message = array(
				"result" => "Successful"
			);
	}else{
		$message = array(
				"result" => "Could not create notification"
			);
	}
}

json_encode($message);
print_r(json_encode($message));
mysqli_close($link);
?>