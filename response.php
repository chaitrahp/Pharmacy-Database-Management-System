
<?php
include("connection.php");
class Pharma {
	protected $conn;
	protected $data = array();
	function __construct() {

		$db = new dbObj();
		$connString =  $db->getConnstring();
		$this->conn = $connString;
	}
	
	public function getPharmaRecord() {
		
		$sql = "SELECT name, location FROM pharma";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch pharma data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}
}

?>