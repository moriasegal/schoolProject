<?php 


class DB {
	private static $conn;
	
	public function getConnection() {
		if (empty(self::$conn)) {
			return self::$conn = new mysqli('localhost', 'root', '', 'school_db');
		} else {
			return self::$conn;
		}
	}

	private function __construct() {}
}


