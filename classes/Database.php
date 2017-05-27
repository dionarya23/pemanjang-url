<?php


class Database{

	private $conn;
	private $host = 'localhost',
			$dbname = "url-longer",
			$user = 'root',
			$pass = '';
	private static $instance = null;


	public function __construct(){

		try {
		$this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		die('gagal'. $e->getMessage());
		}
	}

	public static function getInstance(){
		if (!isset(self::$instance)){
			self::$instance = new Database();
		}

		return self::$instance;
	}

	public function insert($table, $dataurl = array()){
		$key = implode(", ", array_keys($dataurl));

		$arrayValue = array();
		$i = 0;

		foreach ($dataurl as $value) {
			if (is_int($value)){
				$arrayValue[$i] = $value;
			}else{
				$arrayValue[$i] = "'".$value."'";
			}
			$i++;
		}

		$value = implode(", ", $arrayValue);

		$sql      = "INSERT INTO $table($key) VALUES($value)";
		
		if ($this->conn->query($sql)){
			return true;
		}else{
			return false;
		}
	}

	public function get_where($table, $palsunya){
		$sql = "SELECT * FROM $table WHERE palsu='$palsunya'";
		
		if ($result = $this->conn->query($sql)){
			return $result;
		}else{
			return "Gagal Menampilkan Data";
		}
	}



}