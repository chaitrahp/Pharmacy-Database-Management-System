<?php
Class dbObj{
	/* Database connection start */
	var $conn;
 
	function getConnstring() {
	$connection = "host=localhost port=5432 dbname=pharmacy user=postgres password=hegde234";

    $con = pg_connect($connection);

		/* check connection */
		if (pg_last_error()) {
			printf("Connect failed: %s\n", pg_last_error());
			exit();
		} else {
			$this->conn = $con;
		}
		return $this->conn;
	}
}
