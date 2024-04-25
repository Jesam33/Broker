
<?php

// echo $token;
class DbConnection {
	private $host = "localhost";
	private $dbname = "unionbo3_option";
	private $username = "unionbo3_pro";
	private $password = "@Kenaley123$";
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
