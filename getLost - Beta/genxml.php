<?php
// This script is based on a tutorial accessible from: https://developers.google.com/maps/articles/phpsqlajax_v3

// This is a helper function that encodes some special characters in order to be XML friendly.
function parseToXML($htmlStr)
{
	$xmlStr = str_replace('<','&lt;',$htmlStr);
	$xmlStr = str_replace('>','&gt;',$xmlStr);
	$xmlStr = str_replace('"','&quot;',$xmlStr);
	$xmlStr = str_replace("'",'&#39;',$xmlStr);
	$xmlStr = str_replace("&",'&amp;',$xmlStr);
	return $xmlStr;
}

include "connect.php";

//Execute the appropriate query
$r = $handler->query("SELECT LATITUDE,LONGITUDE,NAME,DESCRIPTION,TYPE,STARS,LINK FROM LOCATION,PLACE,RATING,PICTURE
 WHERE LOCATION.PID = PLACE.PID AND RATING.PID = PLACE.PID AND PICTURE.PLID = PLACE.PID");
$r->setFetchMode(PDO::FETCH_ASSOC);
 
if(!$r)
{
  die('Invalid query: ' . mysql_error());
}

else
{
	header("Content-type: text/xml");
	
	//Output the xml using the echo function
	echo '<markers>';
	
	while ($result = $r->fetch())
	{
		echo '<marker ';
		echo 'name="' . parseToXML($result['NAME']) . '" ';
		echo 'description="' . parseToXML($result['DESCRIPTION']) . '" ';
		echo 'type="' . parseToXML($result['TYPE']) . '" ';
		echo 'link="' . parseToXML($result['LINK']) . '" ';
		echo 'lat="' . $result['LATITUDE'] . '" ';
		echo 'lng="' . $result['LONGITUDE'] . '" ';
		echo 'stars="' . $result['STARS'] . '" ';
		echo '/>';
	}
	
	echo '</markers>';
}

?>
