<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Submission Status</title>
</head>
<body>

<?php
		require_once 'Connect_DB.php';
    	require_once 'dbHandler.php';
		$db = new dbHandler();
		
		$pname = $_POST["pname"];
		$pdescription = $_POST["pdescription"];
		$ptype = $_POST["ptype"];
	
		$query = $db->insert("PLACE",array('NAME' => $pname, 'DESCRIPTION' => $pdescription, 'TYPE' => $ptype));
		
		if (!$query)
		{
			die('Invalid query: ' . mysql_error());
		}
		else
		{	
			echo "Submission succeeded!!!";
		}
?>

<h1><a href=<?php echo "insertAll.html"; ?>>Insert Data</a></h1>;
</body>
</html>