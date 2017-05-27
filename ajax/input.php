<?php


require_once '../classes/Random.php';
require_once '../classes/Input.php';
require_once '../classes/Database.php';

if (!isset($_POST['url_asli'])){
	header('Location: index.php');
}


$Database = new Database();
$input    = new Input();
$random   = new Random();
$url_asli = strip_tags(trim($_POST['url_asli']));
$hash     = $random->get_string($url_asli);
$arrayInput = array(
	'asli' => $url_asli,
	'palsu' => $hash,
	);

if ($input->masuk($arrayInput)){
	echo $hash;
}else{
	echo "Ada Kesalahan";
}