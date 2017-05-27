<?php

spl_autoload_register(function($class){
	require_once 'classes/'.$class.'.php';
});

function base(){
	echo "http://localhost/url-longer/u-";
}
