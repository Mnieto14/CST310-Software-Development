<?php

class dbconn { 

	function __construct() {
		$this->connection = new mysqli('localhost', 'root', '', 'employee_portal_website') or die;
	}
	
    function executeSelectQuery($con,$sql) {
        $result = mysqli_query($con, $sql);
    }
	
	function executeQuery($con,$sql) {
        $result = mysqli_query($con, $sql);
    }
}

$newCon = new dbconn();
?>