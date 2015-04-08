<?php

include "connect.php";

	$name = "NULL";
	$desc = "NULL";
	$type = "NULL";
	$link = "NULL";
	$star = 0;
	$rat = "NULL";

if (isset($_POST['lat']) && isset($_POST['lng'])) {
	
	$lat = strip_tags($_POST['lat']);
	$lng = strip_tags($_POST['lng']);
	
	$query = $handler->query("SELECT PID FROM location
								WHERE LATITUDE LIKE '$lat' && LONGITUDE LIKE '$lng'");
	
	while ($r = $query->fetch())
	{
		$id = $r['PID'];
		$query2 = $handler->query("SELECT place.PID,rating.PID,PLID, NAME, DESCRIPTION, TYPE, LINK, STARS
								FROM place, picture, rating
								WHERE place.PID = '$id' && place.PID = PLID && place.PID = rating.PID LIMIT 1");
		$query2->setFetchMode(PDO::FETCH_ASSOC);
		
		while($r2 = $query2->fetch())	
		{
			$name = $r2['NAME'];
			$desc = $r2['DESCRIPTION'];
			$type = $r2['TYPE'];
			$link = $r2['LINK'];
			$star = $r2['STARS'];
				
			switch ($star)
			{
				case 0:
					$rat = "images/0Star.png";
					break;
				case 1:
					$rat = "images/1Star.png";
					break;
				case 2:
					$rat = "images/2Star.png";
					break;
				case 3:
					$rat = "images/3Star.png";
					break;
				case 4:
					$rat = "images/4Star.png";
					break;
				case 5:
					$rat = "images/5Star.png";
					break;
			}	
		}
	}
	
	?>
	
	
	<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Get Lost... by MicroLimn SoftWorks</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="index.html">Get Lost...</a> by MicroLimn SoftWorks</h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="explore.html">Explore</a></li>
						<li>
							<a href="" class="icon fa-angle-down">Recommended</a>
							<ul>
								<li><a href="generic.html">Top Landmarks</a></li>
								<li><a href="#">Top Munchies</a></li>
								<li><a href="#">Top Clubs</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact Us!</a></li>
					</ul>
				</nav>
			</header>

			<section id="banner">
				<div>
				</div>
			</section>
			
		<!-- Main -->
			<section id="main" class="container">
				<header>
					<h2><?php echo $name;  ?></h2>
					<h1><?php echo $type;  ?></h1>
					<h1><img src="<?php echo $rat;  ?>" alt="" /></h1>
				</header>
				<div class="box">
					<span class="image featured"><img src="<?php echo $link;  ?>" alt="" width="1200px" height="620" /></span>
					<h3>General Information</h3>
					<p><?php echo $desc;  ?></p>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy;2015 MicroLimn SoftWorks. All rights reserved.</li>
				</ul>
			</footer>

	</body>
</html>
</html>
	
	
	
<?php	
} else
	echo 'NOT FOUND';
?>


