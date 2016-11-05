<?php

// Функция для добавления записи на .json файл
function create_json($array) {
	$f = fopen('phonebook.json','w');
	$file = 'phonebook.json';
	
	if(file_exists($file)) {
		$json = json_encode($array);
		file_put_contents($file, $json);
	}
	else {
		echo "$file не найдено!";
		die;
	}
	
	fclose($f);
}

// Функция для чтения записи из .json файла
function read_json() {
	$json = file_get_contents('phonebook.json');
	
    $profiles = json_decode($json, true);
    return $profiles;
}

?>