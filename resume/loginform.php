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



$passhash = hash('sha256', $password, false);

$session_hash = uniqid();

$result = ['success'] == 'false';



if ($type == "login") 
{
	$dbresult = mysqli_query($db, "SELECT session_hash FROM user_account WHERE pass_hash ='$passhash'");
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

	
} else {
	//create user account
	mysqli_query($db, "INSERT INTO user_account (user_name, pass_hash, session_hash) VALUES ('$username', '$passhash', '$session_hash')");

	$result['success'] = "true";
	$result['msg'] = "Account Created Successfull";
	$result['sessionhash'] = $session_hash;


}

print json_encode($result);



?>