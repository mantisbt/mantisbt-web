<?php

Class DatabaseConnection 
{
	var $connection;
	var $databaseName;
	var $result;

	// -------------------------------------------------------------
	function DatabaseConnection() 
	{
		$this->databaseName = DB_NAME; 
		$serverName = DB_HOST;		
		$databaseUser = DB_USER;		
		$databasePassword = DB_PASSWORD;

		$this->connection = mysql_connect ($serverName, $databaseUser, $databasePassword) or die ('I cannot connect to the database.');
		
		mysql_select_db ($this->databaseName);
	}
	
	// -------------------------------------------------------------
	function Close()
	{
		mysql_close($this->connection);
	}

	// -------------------------------------------------------------
	function GetConnection() {
		return $this->connection;
	}

	// -------------------------------------------------------------
	function Query($query) 
	{	
		$this->result = mysql_query($query,$this->connection);
		//echo $query;
		if (!$this->result) {
			die('Invalid query: '.mysql_error());
		}
		return $this->result;
	}

	// -------------------------------------------------------------
	function Rows() 
	{
		if ($this->result != false)
		{
			return mysql_num_rows($this->result);
		}
		return null;
	}
	
	// -------------------------------------------------------------
	function AffectedRows() 
	{
		return mysql_affected_rows();
	}

	// -------------------------------------------------------------
	function Result($row,$name) 
	{
		if ($this->Rows() > 0)
		{
			return mysql_result($this->result,$row,$name);
		}
		return null;
	}
	

	// -------------------------------------------------------------
	function InsertOrUpdate($query) 
	{
		$this->result = mysql_query($query,$this->connection);
		return ($this->AffectedRows() > 0);
	}
	
	/**
	* This function will always try to encode $text to base64, except when $text is a number. This allows us to Escape all data before they're inserted in the database, regardless of attribute type.
	* @param string $text
	* @return string encoded to base64
	*/
	function Escape($text) 
	{
		if (!ctype_digit($text) && !is_numeric($text))
		{
			return addslashes($text);
		}
		return $text;
	}
	
	// -------------------------------------------------------------
	function Unescape($text)
	{
		if (!ctype_digit($text)  && !is_numeric($text))
		{
			return stripslashes($text);
		}
		return $text;
	}
	
	// -------------------------------------------------------------
	function GetCurrentId()
	{
		return intval(mysql_insert_id($this->connection));
	}
}
?>