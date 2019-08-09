
<?php
include("connection.php");
class Drug {
	protected $conn;
	protected $data = array();
	function __construct() {

		$db = new dbObj();
		$connString =  $db->getConnstring();
		$this->conn = $connString;
	}
	
	public function getDrugRecord() {
		
		$sql = "SELECT drug_name,dosage,type,price,mfg_date,exp_date FROM drug";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch doctor data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}
}

?>