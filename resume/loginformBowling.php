<?php
$db = mysqli_connect("localhost", "jeffreyl_mobile", "JeffLindgren20", "jeffreyl_mobile");


if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_errror();
	# code...
} else {
	//echo "Connect attempt successful!";
}



$username = mysqli_real_escape_string($db, $_POST['user_name']);
$password = mysqli_real_escape_string($db, $_POST['pass_word']);
$type = mysqli_real_escape_string($db, $_POST['type']);
$result = ['success'] == 'false';

if ($type == "login") 
{
	$username = mysqli_real_escape_string($db, $_POST['user_name']);
	$password = mysqli_real_escape_string($db, $_POST['pass_word']);
	$passhash = hash('sha256', $password, false);
	$dbresult = mysqli_query($db, "SELECT session_hash FROM user_bowling WHERE pass_hash ='$passhash' AND user_name = '$username'");

	$dbagain = mysqli_query($db, "SELECT * FROM user_profile WHERE user_id IN (SELECT user_id FROM user_bowling WHERE pass_hash ='$passhash' AND user_name = '$username')");


	if (mysqli_num_rows($dbresult) > 0) {
		while ($row = $dbresult->fetch_assoc()) 
		{
			$result['sessionHash'] = $row['session_hash'];
			$result['success'] = "true";
			$result['msg'] = "Account Login Success";
			
		} 
	} else {
		$result['msg'] = "Invalid login";
	}

	
} else if($type == "create"){
	//create user account

	$username = mysqli_real_escape_string($db, $_POST['user_name']);
	$password = mysqli_real_escape_string($db, $_POST['pass_word']);
	$passhash = hash('sha256', $password, false);
	$session_hash = uniqid();
	mysqli_query($db, "INSERT INTO user_bowling (user_name, pass_hash, session_hash) VALUES ('$username', '$passhash', '$session_hash')");

	$result['success'] = "true";
	$result['msg'] = "Account Created Successfull";
	$result['sessionHash'] = $session_hash;



} else if ($type == "addScore") {
	
	$sessH = mysqli_real_escape_string($db, $_POST['session_hash']);
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$score = mysqli_real_escape_string($db, $_POST['score']);
	$isShared = mysqli_real_escape_string($db, $_POST['isShared']);
	$date = mysqli_real_escape_string($db, $_POST['date']);
	$location = mysqli_real_escape_string($db, $_POST['location']);


	

	$idDB = mysqli_query($db, "SELECT user_id FROM user_bowling WHERE session_hash='$sessH'");

	$tow = mysqli_fetch_array($idDB);

	$user_id = $tow['user_id'];

	

	mysqli_query($db, "INSERT INTO user_bowling_score (user_id, score, location, isShared, name) VALUES ('$user_id', '$score', '$location', '$isShared', '$name')");
	$result['success'] = "true";

	error_log('hit this file.. -sm',0);

} else if ($type == "leader") {
	# code...
	

	$dbresult = mysqli_query($db, "SELECT name, score FROM user_bowling_score WHERE isShared = 1 ORDER by score DESC LIMIT 10");
	$rank = 1;

	        if (mysqli_num_rows($dbresult) > 0) {
	            while ($row = mysqli_fetch_assoc($dbresult)) {
	                $result['list'] .= "<tr class='listTD'><td> {$rank}. </td>
	                      <td>{$row['name']}</td>
	                      <td>{$row['score']}</td></tr>";
	                ;

	                $rank++;
	            }
	        }


	



	$result['seccess'] = 'true';
} 


print json_encode($result);



?>