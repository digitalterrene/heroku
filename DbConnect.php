<?php 
	/**
	* Database Connection
	*/
//mysql://b4bbbfa44b63e2:e53ea345@us-cdbr-east-06.cleardb.net/heroku_fa7614345b684bb?reconnect=true
	class DbConnect {
		private $server = 'us-cdbr-east-06.cleardb.net';
		private $dbname = 'heroku_fa7614345b684bb';
		private $user = 'b4bbbfa44b63e2';
		private $pass = 'e53ea345';

		public function connect() {
			try {
				$conn = new PDO('mysql:host=' .$this->server .';dbname=' . $this->dbname, $this->user, $this->pass);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch (\Exception $e) {
				echo "Database Error: " . $e->getMessage();
			}
		}
	}
 ?>
