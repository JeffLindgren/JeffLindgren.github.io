<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$dbConn = mysqli_connect('localhost', 'jeffreyl_Killer', 'Keeler1298!');

	if (!$dbConn){
		die('Could not connect: ' . mysqli_error());
	}
	$dbObj = mysqli_select_db($dbConn, 'jeffreyl_21RE');
?>