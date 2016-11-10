<?php

// Функция для добавления записи на .json файл
function create_json($array, $file_name) {
	$f = fopen($file_name,'w');
	
	if(file_exists($file_name)) {
		$json = json_encode($array);
		file_put_contents($file_name, $json);
	}
	else {
		echo "$file_name не найдено!";
		die;
	}
	
	fclose($f);
}

// Функция для чтения записи из .json файла
function read_json($file_name) {
	$json = file_get_contents($file_name);
	
    $profiles = json_decode($json, true);
    return $profiles;
}

?>