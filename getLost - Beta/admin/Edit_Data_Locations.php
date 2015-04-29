<?php
// PHP code to exectute an update query on the LOCATION table
	if (isset($_POST[pid]) && isset($_POST[latitude]) && isset($_POST[longitude]) && isset($_POST[lid]))
	{
		require_once 'Connect_DB.php';
		require_once 'dbHandler.php';
		$db = new dbHandler();    // Creation of the object
		// Retrieve data inserted in the edit forms and update the table.
		$db->update("LOCATION", array("PID" => $_POST[pid], "LATITUDE" => $_POST[latitude], "LONGITUDE" => $_POST[longitude]), array("LID" => $_POST[lid]));
		header("location: View_Locations.php");
	}
	else
	{
		echo "An error occurred, go back and try again!";
	}
?>