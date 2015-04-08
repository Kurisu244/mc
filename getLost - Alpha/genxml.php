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

include "connect2.php";

$query = "SELECT LATITUDE,LONGITUDE,NAME,DESCRIPTION,TYPE,STARS,LINK FROM LOCATION,PLACE,RATING,PICTURE
 WHERE LOCATION.PID = PLACE.PID AND RATING.PID = PLACE.PID AND PICTURE.PLID = PLACE.PID";
$result = mysql_query($query);
if (!$result)
{
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

echo '<markers>';

while ($row = @mysql_fetch_assoc($result))
{
  echo '<marker ';
  echo 'name="' . parseToXML($row['NAME']) . '" ';
  echo 'description="' . parseToXML($row['DESCRIPTION']) . '" ';
  echo 'type="' . parseToXML($row['TYPE']) . '" ';
  echo 'link="' . parseToXML($row['LINK']) . '" ';
  echo 'lat="' . $row['LATITUDE'] . '" ';
  echo 'lng="' . $row['LONGITUDE'] . '" ';
  echo 'stars="' . $row['STARS'] . '" ';
  echo '/>';
}

echo '</markers>';

?>
