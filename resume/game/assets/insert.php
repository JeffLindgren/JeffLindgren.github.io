
<?php
	include("include/connectDB.php");

	if(isset($_POST['frmAddPoints']))
	{

		$dbObj = mysqli_select_db($dbConn, 'jeffreyl_21RE');

		$sqlStatement="INSERT INTO scores (player_Name, player_Score) VALUES ('$_POST[playerName]','$_POST[playerScore]')";
 
		if (!mysqli_query($dbConn, $sqlStatement))
		{
			die('Error: ' . mysqli_error());
		}
		// echo "<h2><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RECORD ADDED</h2>";







		include("include/closeDB.php");

		
		// parent.window.location.reload();
	}

?>