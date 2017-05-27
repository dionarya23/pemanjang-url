<?php

class Input{

	private $db;


	public function __construct(){
		$this->db = Database::getInstance();
	}

	public function masuk($data = array())
	{
		if ($this->db->insert('infourl', $data)){
			return true;
		}else{
			return false;

		}
	}

	public function pilih($palsu){
		$hasil = $this->db->get_where('infourl', $palsu);
		return $hasil;
	}
	

}