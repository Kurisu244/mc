<?php
// PHP code to exectute an update query on the PICTURE table
	if (isset($_POST[plid]) && isset($_POST[link]) && isset($_POST[picid]))
	{
		require_once 'Connect_DB.php';
		require_once 'dbHandler.php';
		$db = new dbHandler();       // Creation of the object
		// Retrieve data inserted in the edit forms and update the table.
		$db->update("PICTURE", array("PLID" => $_POST[plid], "LINK" => $_POST[link]), array("PICID" => $_POST[picid]));
		header("location: View_Pictures.php");
	}
	else
	{
		echo "An error occurred, go back and try again!";
	}
?>