<?php
$host = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'team4';

$connection = mysql_connect($host, $username, $password) 
 or die ("Could not connect to server ... \n" . mysql_error ());
 mysql_select_db($database) 
 or die ("Could not connect to database ... \n" . mysql_error ());

?>