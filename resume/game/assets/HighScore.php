

<?php

	include("../include/connectDB.php");





	$dbObj = mysqli_select_db($dbConn, 'jeffreyl_21RE'); // get DB from lastknow connection





	$sqlStatement = "SELECT * FROM scores ORDER BY player_Score DESC LIMIT 5";


	$result = $sqlStatement;

	



	$result = mysqli_query($dbConn, $sqlStatement);

	



	$studentRecord = mysqli_fetch_array($result);





	if (!$studentRecord)

	{

		die('Error: ' . mysqli_error());

	}

	

	$x = 1;
	echo "<link rel='shortcut icon' href='images/honor_diamond.png' />";
	echo "<title>21 Remastered | HS</title>";
	

	echo "<h1>High Scores</h1>";

	if(count($result) > 0) {
        foreach($result as $r) {
	    $name = $r['player_Name'];
	    $score = $r['player_Score'];
            echo "<p>" .$x . ". " . $name . " | Score: " . $score . "<p/>";
	    ++$x; 
        }
    }



	include("../include/closeDB.php");

?>