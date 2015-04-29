<?php
// Create the connection to the mySQL server in order to access the database
try
{
	$handler = new PDO('mysql:host=localhost;dbname=mclabs_arcdb','mclabs_arc','4arcdb%admin1');
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
	die();
}
?>