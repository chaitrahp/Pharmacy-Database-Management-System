
<?php
include("connection.php");
class Doctor {
	protected $conn;
	protected $data = array();
	function __construct() {

		$db = new dbObj();
		$connString =  $db->getConnstring();
		$this->conn = $connString;
	}
	
	public function getDoctorRecord() {
		
		$sql = "SELECT doct_name, speciality ,email,phone_no FROM doctor";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch doctor data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}
}

?>