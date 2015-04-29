<?php
// PHP code to exectute an update query on the PLACE table
	if (isset($_POST[pname]) && isset($_POST[pdescription]) && isset($_POST[ptype]) && isset($_POST[pid]))
	{
		require_once 'Connect_DB.php';
		require_once 'dbHandler.php';
		$db = new dbHandler();         // Creation of the object
		// Retrieve data inserted in the edit forms and update the table.
		$db->update("PLACE", array("NAME" => $_POST[pname], "DESCRIPTION" => $_POST[pdescription], "TYPE" => $_POST[ptype]), array("PID" => $_POST[pid]));
		header("location: View_Places.php");
	}
	else
	{
		echo "An error occurred, go back and try again!";
	}
?>