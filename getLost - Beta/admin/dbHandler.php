<?php
// A class to help manipulate database content (select, insert, update, delete).
class dbHandler
{
	private $db; //private variable to act as a handler to the database.
	
	// Constructor
	function __construct()
	{
        include("Connect_DB.php");
        $this->db = $handler;
    }
	
	// This function executes a select query and returns the result as an associative array.
	// $table: the name of the table.
	// $clause: associative array representing the where clause.
	function select($table, $clause)
	{
		$where = "";
		foreach ($clause as $key => $value)
		{
			$where .= " AND " .$key. " LIKE "."'".$value."'";
		   
		}
		$result = $this->db->query("SELECT * FROM ".$table." WHERE 1=1 ". $where);
		$result->setFetchMode(PDO::FETCH_ASSOC);
        return $result;
    }
	
	// This function executes an insert query and returns the result of the action.
	// $table: the name of the table.
	// $assocArray: associative array representing the data that need to be inserted.
    function insert($table, $assocArray)
	{
		$columns = "";
		$values = "";
		foreach ($assocArray as $key => $value)
		{
			$columns .= $key. ", ";
			$values .= "'".$value. "'". ", ";

		}
		$columns = rtrim($columns,', ');
		$values = rtrim($values,', ');
		$result = $this->db->query("INSERT INTO $table($columns) VALUES($values)");
        return $result;
    }
	
	// This function executes an update query and returns the result of the action.
	// $table: the name of the table.
	// $assocArray: associative array representing the columns that are going to be updated with the specified values.
	// $clause: associative array representing the where clause.
    function update($table, $assocArray, $clause)
	{ 
		$where = "";
		$columns = "";
		foreach ($clause as $key => $value) {
			$where .= " and " .$key. " = "."'".$value."'";
		}
		foreach ($assocArray as $key => $value) {
			$columns .= $key. " = "."'".$value."'".", ";
	
		}
		$columns = rtrim($columns,", ");
		$result = $this->db->query("UPDATE $table SET $columns WHERE 1=1 ".$where);
        return $result;
    }
	
	// This function executes a delete query and returns the result of the action.
	// $table: the name of the table.
	// $clause: associative array representing the where clause.
    function delete($table, $clause)
	{
		$where = "";
		foreach ($clause as $key => $value)
		{
			$where .= " and " .$key. " = "."'".$value."'";
   
		}		
		$result = $this->db->query("DELETE FROM $table WHERE 1=1 ".$where);
        return $result;
    }
}

?>
