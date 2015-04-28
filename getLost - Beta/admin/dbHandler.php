<?php
class dbHandler
{
	function select($table, $clause)
	{
		include('Connect_DB.php');
		$where = "";
		foreach ($clause as $key => $value)
		{
			$where .= " AND " .$key. " LIKE "."'".$value."'";
		   
		}
		$result = $handler->query("SELECT * FROM ".$table." WHERE 1=1 ". $where);
		$result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }
	
    function insert($table, $assocArray)
	{
        include('Connect_DB.php');
		$columns = "";
		$values = "";
		foreach ($assocArray as $key => $value)
		{
			$columns .= $key. ", ";
			$values .= "'".$value. "'". ", ";

		}
		$columns = rtrim($columns,', ');
		$values = rtrim($values,', ');
		$result = $handler->query("INSERT INTO $table($columns) VALUES($values)");
        return $result;
    }
	
    function update($table, $assocArray, $clause)
	{ 
		include('Connect_DB.php');
		$where = "";
		$columns = "";
		foreach ($clause as $key => $value) {
			$where .= " and " .$key. " = "."'".$value."'";
		}
		foreach ($assocArray as $key => $value) {
			$columns .= $key. " = "."'".$value."'".", ";
	
		}
		$columns = rtrim($columns,", ");
		$result = $handler->query("UPDATE $table SET $columns WHERE 1=1 ".$where);
        return $result;
    }
	
    function delete($table, $clause)
	{
		include('Connect_DB.php');
		$where = "";
		foreach ($clause as $key => $value)
		{
			$where .= " and " .$key. " = "."'".$value."'";
   
		}		
		$result = $handler->query("DELETE FROM $table WHERE 1=1 ".$where);
        return $result;
    }
}

?>
