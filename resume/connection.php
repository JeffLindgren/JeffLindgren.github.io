<?php
$db = mysqli_connect("localhost", "jeffreyl_mobile", "JeffLindgren20", "jeffreyl_mobile");


if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_errror();
	# code...
} else {
	//echo "Connect attempt successful!";
}
?>