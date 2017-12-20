<?php

include("config.php");

session_start();
$user_id = $_SESSION["id"];

$P_ID      = "";
$firstname = $_POST['form-first'];
$lastname  = $_POST['form-last'];
$email     = $_POST['form-emaila'];
$username  = $_POST['form-usern'];
$password  = $_POST['form-passw'];
$password2 = $_POST['form-passw2'];
$title     = $_POST['form-title'];


/*if ($password != "" && strlen($password) < 8) {
    echo "Too short";
}
else if($password!=$password2){
	echo "Passwords don't match";
}*/
if ($password != "" && strlen($password) < 8) {
     $message = array(
            "id"=> "password",
            "result" => "Password too short"
        );
}
else if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/',$password))
{
    $message = array(
            "id" => "password",
            "result" => "Password must be at least 8 characters with 1 number,1 upper case and 1 lowercase"
        );
}
else if($password!=$password2){
	$message = array(
            "id" => "password",
            "result" => "Passwords dont match"
        );
}
else {
    //Insert in Person table 
    $query1 = "INSERT INTO person_tbl VALUES (NULL,'$title','$firstname','$lastname','$email')";
    
    if ($link->query($query1) === TRUE) {
        $P_ID = $link->insert_id;
    } else {
         $message = array(
            "result" => "Could not add user"
        );
    }
    
	$date = new DateTime();
	$date = $date->setTimezone(new DateTimeZone('America/Bogota')); 
	$date = $date->format("y:m:d H:i:s");				
    //Insert into Login Table
    $query3 = "INSERT INTO login_tbl VALUES (NULL,'$username','".md5($password)."','$P_ID','A','$date','')";
    
    if ($link->query($query3) === TRUE) {
         $message = array(
            "result" => "User entered"
        );
        
    } else {
        $message = array(
            "result" => "Could not add user"
        );
    }
}
json_encode($message);
print_r(json_encode($message));
$link->close();

?>

