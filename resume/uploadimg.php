<?php


include 'connection.php';

error_log('hit this file.. -sm',0);

$imgstr = uniqid();

$imgstr .= ".jpg";

$filename = $imgstr;

error_log($filename,0);
error_log(print_r($_FILES,true),0);

move_uploaded_file($_FILES["file"]["tmp_name"], 'upload/'.$filename);


$auth = $_POST['auth'];

error_log(print_r($auth, true),0);


$dbresult = mysqli_query($db, "UPDATE user_profile SET image='$filename' WHERE user_id IN (SELECT user_id FROM user_bowling WHERE session_hash='$auth')");
error_log(print_r($dbresult, true),0);
?>