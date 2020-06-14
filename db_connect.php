<?php

class DBconfig
{
	private $_server    = "localhost";
	private $_username  = "root";
	private $_password  = "";
	private $_database  = "tickets";

	protected $connection;

	public function __construct()
	{
		if( !isset( $this->connection ) )
		{
			$this->connection = new mysqli( $this->_server,$this->_username,$this->_password,$this->_database );

			if (!$this->connection) 
			{
				echo 'Cannot connect to database server';
				exit;
			}
		}
		mysqli_set_charset($this->connection, 'utf8');
		
		date_default_timezone_set("Asia/Kolkata");
		
		return $this->connection;
	}
} 
?>