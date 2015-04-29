<?php
// PHP code to exectute an update query on the RATING table
	if (isset($_POST[pid]) && isset($_POST[stars]) && isset($_POST[rid]))
	{
		require_once 'Connect_DB.php';
		require_once 'dbHandler.php';
		$db = new dbHandler();         // Creation of the object
		// Retrieve data inserted in the edit forms and update the table.
		$db->update("RATING", array("PID" => $_POST[pid], "STARS" => $_POST[stars]), array("RID" => $_POST[rid]));  
		header("location: View_Ratings.php");
	}
	else
	{
		echo "An error occurred, go back and try again!";
	}
?>