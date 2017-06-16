<?php 


//class DB {
//	private static $conn;
//	
//	public function getConnection() {
//		if (empty(self::$conn)) {
//			return self::$conn = new mysqli('localhost', 'root', '', 'school_db');
//		} else {
//			return self::$conn;
//		}
//	}
//
//	private function __construct() {}
//}



class DB
{
    private $conn;
    private static $instance;

    private function __construct() {
        $this->conn = new mysqli('localhost', 'root', '', 'school_db'. '');
        if ($this->conn->errno) {
            echo $this->conn->error;
            die();
        }
    }

    public static function getInstance() {
        if (empty(self::$instance)) {
            return self::$instance = new self();
        } else {
            return self::$instance;
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}


