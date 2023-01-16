<?php

class Dbh{	
		private $hostname;
    	private $username;
    	private $password;
    	private $dbname;
		
		protected function connect(){
		$this->hostname = "localhost";
		$this->dbname = "cc_gen";
		$this->username = "root";
		$this->password = "";
		try {
			$db = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
			//echo "Connected successfully";
			return $db;
		}catch (mysqli_sql_exception $e) {
     		throw new mysqli_sql_exception($e->getMessage(), $e->getCode());
		}
	}
}
?>
