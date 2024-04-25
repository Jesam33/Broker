
<?php

// echo $token;
class DbConnection {
	private $host = "localhost";
	private $dbname = "db_name";
	private $username = "db_user";
	private $password = "rFPT3ny*W4JQlzEY";
	public $connection;

	public function __construct() {
		try {
			$this->connection = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
		} catch(PDOException $ex) {
			echo $ex->getMessage();
		}
	}
}
?>
