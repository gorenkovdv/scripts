<?php

function toBoolean($value){
	return filter_var($value, FILTER_VALIDATE_BOOLEAN);
}

function formatDate($format, $data){
	if(is_null($data)) return null;

	return date($format, strtotime($data));
}

function curl_get($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);
	curl_close($ch);

	return $result;
}