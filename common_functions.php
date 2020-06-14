<?php
session_start();
include_once 'db_connect.php';

class crud extends DBconfig
{	
	public function __construct()
	{
		parent::__construct();
	}

	public function getData($query)
	{		
		$rows = array();

		if($result = $this->connection->query($query))
		{
			while ($row = $result->fetch_assoc()) 
			{
				$rows[] = $row;
			}
		}
		else
		{
			return false;
		}

		return $rows;
	}

	public function getCount($query)
	{		
		$result = $this->connection->query($query);
		$rowcount = $result->num_rows;
		return $rowcount;
	}
		
	public function execute($query) 
	{
		$result = $this->connection->query($query);
		
		if ($result == false) 
		{
			return false;
		} 
		else 
		{
			return true;
		}		
	}

	public function getlasterror() 
	{		
		return mysqli_error($this->connection);
	}

	public function getlast_insertedid() 
	{
		$result = mysqli_insert_id($this->connection);
		
		if ($result == false) 
		{
			echo 'Error: cannot execute the command';
			return false;
		} 
		else 
		{
			return $result;
		}		
	}
/*==================Commit,Rollback,Toclose,Autocommit  START=============*/
	public function toautocommit()
	{
		mysqli_autocommit($this->connection,FALSE);
	}
	public function torollback() 
	{
		mysqli_rollback($this->connection);
	}
	public function tocommit() 
	{
		mysqli_commit($this->connection);
		
	}	
	public function toclose()
	{
		mysqli_close($this->connection);
		// $result = mysqli_close($this->connection);
	}
/*==================Commit,Rollback,Toclose,Autocommit  END=============*/

	public function escape_string($value)
	{
		return $this->connection->real_escape_string($value);
	}
	public function is_login()
	{
		if( ! isset( $_SESSION['user_details'] ) )
		{
			echo "<script>window.location.href='login.php';</script>";
		}
	}      
}
?>