<?php

function street(array $a): string {
	if(array_key_exists('user', $a) 
	   && array_key_exists('address', $a['user'])
	   && array_key_exists('street',  $a['user']['address'])){
		return $a['user']['address']['street'];
	}
	
	return '';
}

function street1(array $a): string {
	$has = array_key_exists(...);
	
	if($has('user', $a) && $has('address', $a['user']) && $has('street',  $a['user']['address'])){
		return $a['user']['address']['street'];
	}
	
	return '';
}

$arr = [
	'user' => [
	   'address' => [
	   	   'street' => 'Wiejska'
	   	]	
	]
];

var_dump(street($arr), street1($arr));
