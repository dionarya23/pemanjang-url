<?php

class Random{

	private $str = array(
		1, 2, 3, 4, 5, 6, 7, 8, 9, 0, "A", "B", "C", "D", "E", "F", "G", "H",
		"I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", 
		"W", "X", "Y", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j",
		"l", "m", "n", "o", "p", "q", "r", "s", "t", "u","v", "w", "x", "y", "z"
		);

	public function get_string($string){
		
		return $this->loop();

	}

	private function loop(){
		$total = count($this->str);
		$str = "";
		for ($i=0; $i < 55 ; $i++) { 
			$str .= $this->str[rand(0,60)];
		}
		return "http://localhost/url-longer/u-".$str;
	}

}
