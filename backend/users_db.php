<?php
	// DB Connect 
	function db_connect() {
		static $connection;

		if(!isset($connection)) {
			// Create Connection
			// $host = "localhost";
			// $user = "root";
			// $pw = "root";
			// $db = "users_db";

			// $connection = mysqli_connect($host, $user, $pw, $db);
			$configArray = parse_ini_file("../../../con/config.ini");
			$connection = mysqli_connect($configArray["host"], $configArray["username"], $configArray["password"], $configArray["database"] );


			if(!$connection) {
				return mysqli_connect_error();
			}
			else {
				return $connection;
			}
		}
		else {
			// Connection has already been made
			return $connection;
		}
	}


	// Close Connection
	function db_close($conn) {
		if($conn) {
			mysqli_close($conn);
		}
	}
?>