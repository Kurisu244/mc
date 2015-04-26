<?php

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

$query = $handler->query("SELECT LATITUDE,LONGITUDE,NAME,DESCRIPTION,TYPE,STARS,LINK FROM LOCATION,PLACE,RATING,PICTURE
 WHERE LOCATION.PID = PLACE.PID AND RATING.PID = PLACE.PID AND PICTURE.PLID = PLACE.PID");
$query->setFetchMode(PDO::FETCH_ASSOC);
 
if(!$query)
{
  die('Invalid query: ' . mysql_error());
}

else
{
	header("Content-type: text/xml");
	
	echo '<markers>';
	
	while ($result = $query->fetch())
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
