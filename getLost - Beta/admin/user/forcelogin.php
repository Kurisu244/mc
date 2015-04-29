<?php
// If the user is not logged in, redirect to login page. 
//Remember to start the session in the page you're checking!

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
{ } 
else 
{ header("Location: login.php"); }

?>