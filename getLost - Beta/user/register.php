<?php
	if (isset($_POST['submit']))
	{
		include 'connect.php';
		$user = $_POST['Username'];
		$pass = $_POST['Password'];
		$email = $_POST['Email'];
		$name = $_POST['FullName'];
		$q = "INSERT INTO USER (USERNAME,PASSWORD,FULLNAME,EMAIL) 
									VALUES (:user, :pass, :name, :email);";
		$query = $handler->prepare($q);	
		$results = $query->execute(array(
			":user" => $user,
			":pass" => $pass,
			":name" => $name,
			":email" => $email
		));
		
		$sMessage = "Registration Complete";
		echo "<script type='text/javascript'>alert('$sMessage');</script>";
		header("Location: register.php");
	}
	else
?>

<html>
<head>
<title> Admin Page </title>
</head>
<body>
	<form action="register.php" method="post">
		</br>
		Username: <input type="text" name="Username"><br/>
		Password: <input type="password" name="Password"><br/>
		Full Name: <input type="text" name="FullName"><br/>
		E-Mail: <input type="email" name="Email"><br/>
		<input type="submit" name="submit">
	</form>
	
</body>
</html>