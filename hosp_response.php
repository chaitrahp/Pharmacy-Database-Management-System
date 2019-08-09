
<?php
include("connection.php");
class Hospital {
	protected $conn;
	protected $data = array();
	function __construct() {

		$db = new dbObj();
		$connString =  $db->getConnstring();
		$this->conn = $connString;
	}
	
	public function getHospitalRecord() {
		
		$sql = "SELECT hosp_name,location,email,phone_no FROM hospital";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch doctor data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}
}

?>