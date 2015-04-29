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
		require_once 'Connect_DB.php';
    	require_once 'dbHandler.php';
		$db = new dbHandler();
		
		$id = $_GET['id'];
		
		// Retrieve specified records from the database in order to be displayed when the edit form opens.
		$result = $db -> select("PICTURE", array('PLID'=>$id));
		
		while($rows = $result->fetch())
		{
			$picid = $rows['PICID'];
			$plid = $rows['PLID'];
			$link = $rows['LINK'];
		}

      ?>
	  <!-- Creation of the edit form -->
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