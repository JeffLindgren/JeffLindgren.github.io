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
			
			// if(mysqli_num_rows($dbagain) > 0)
			// {
			// 	while ($row = $dbagain->fetch_assoc())
			// 	{
			// 		$result['fullname'] = $row['fullname'];
			// 		$result['age'] = $row['age'];
			// 		$result['image'] = $row['image'];
			// 	} 
			// }
			
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


} else if ($type == "getProfile") {
	# code...
	$session_hash = mysqli_real_escape_string($db, $_POST['session_hash']);

	$dbresult = mysqli_query($db, "SELECT * FROM user_profile WHERE user_id IN (SELECT user_id FROM user_bowling WHERE session_hash='$session_hash')");


	if (mysqli_num_rows($dbresult) > 0) {
		while ($row = $dbresult->fetch_assoc()) 
		{
			# code...
			$result= $row;
		}
	}



	$result['seccess'] = 'true';
} else if ($type == "addp") {
	$sessH = mysqli_real_escape_string($db, $_POST['session_hash']);
	$age = mysqli_real_escape_string($db, $_POST['age']);
	$name = mysqli_real_escape_string($db, $_POST['name']);
	

	$idDB = mysqli_query($db, "SELECT user_id FROM user_bowling WHERE session_hash='$sessH'");

	$tow = mysqli_fetch_array($idDB);

	$user_id = $tow['user_id'];

	$dbresult = mysqli_query($db, "INSERT INTO user_profile (user_id, fullname, age) VALUES ('$user_id', '$name', '$age')");
	$result['success'] = "true";


}


print json_encode($result);



?>