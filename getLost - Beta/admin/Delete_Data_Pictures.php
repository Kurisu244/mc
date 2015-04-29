<?php
// PHP code to execute a delete query on the PICTURE table
	if (isset($_GET['id']))
	{
		require_once 'Connect_DB.php';
		require_once 'dbHandler.php';
		$db = new dbHandler();         // Creation of the object 
		
		$id = strip_tags($_GET['id']);
		$db->delete("PICTURE", array("PICID" => $id));       // Delete the specified record
		header('location:View_Pictures.php');   
	}
	else
	{
		echo "An error occurred, go back and try again!";
	}
?>
