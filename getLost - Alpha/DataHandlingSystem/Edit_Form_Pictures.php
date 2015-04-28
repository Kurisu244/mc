<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Edit Data</title>
</head>

<body background="pic01.jpg">
<table border=1>
  <tr>
    <td align=center>Edit Data</td>
  </tr>
  <tr>
    <td>
      <table>
      <?php
		include('Connect_DB.php');
		
		$id = $_GET['id'];
		
		$query = $handler->query("SELECT * FROM PICTURE WHERE PLID = '$id'");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		
		while($result = $query->fetch())
		{
			$picid = $result['PICID'];
			$plid = $result['PLID'];
			$link = $result['LINK'];
		}

      ?>
      <form method="post" action="Edit_Data_Pictures.php">
	  
		<input type="hidden" name="picid" size="4" value="<?php echo $picid?>">
	  
        <tr>        
          <td>Place ID:</td>
          <td>
            <input type="text" name="plid" size="4" value="<?php echo $plid?>">
          </td>
        </tr>
		
        <tr>
          <td>URL:</td>
          <td>
            <input type="text" name="link" size="80" value="<?php echo $link?>">
          </td>
        </tr>

		
        <tr>
          <td align="center">
            <input type="submit" name="submit" value="Save">
          </td>
        </tr>
		
      </form>
      </table>
    </td>
  </tr>
  
</table>
</body>
</html>