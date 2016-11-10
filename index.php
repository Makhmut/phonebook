<!DOCTYPE html>
<html>
<head>
	<title>Домашнее задание на Установка и настройка веб сервера</title>
	<style>
		table {
			margin: 0 auto;
		}
		table tr {
			vertical-align: middle;
			background-color: #fcfcfc;
		}
		table tr:nth-child(2n) {
			background-color: #eee;
		}
	</style>
</head>
<body>

<?php 

require_once("functions.php");

// Массив с телефонным книгам
$profiles = [
	[	
		"firstName" => "Макс",
		"lastName" => "Куанов",
		"address" => "г. Атырау, ул. Баймуханова 44",
		"phoneNumber" => "8 756 522-45-56"
	],
	[	
		"firstName" => "Махмут",
		"lastName" => "Абайулы",
		"address" => "г. Атырау, ул. Калмуканова 7",
		"phoneNumber" => "8 789 485-45-95"
	],
	[	
		"firstName" => "Тунгышбай",
		"lastName" => "Жалелов",
		"address" => "г. Атырау, ул. Калмуканова 7",
		"phoneNumber" => "8 825 522-87-56"
	],
	[	
		"firstName" => "Ардак",
		"lastName" => "Назаров",
		"address" => "г. Атырау, ул. Курмангазы 7",
		"phoneNumber" => "8 825 522-85-65"
	],
	[	
		"firstName" => "Сергей",
		"lastName" => "Семак",
		"address" => "г. Москва, ул. Дементьев 15",
		"phoneNumber" => "8 825 698-23-32"
	]
	// Если добавить сюда еще элементы то они автоматически добавляются
];

// Добавить массив profiles в .json файл
create_json($profiles,'files/phone.json');

?>

<!-- Таблица для вывода телефонной книги -->

<table border=1 cellpadding=5 cellspacing=1>
	<tr>
		<th colspan='4'>Телефонная книга</th>
	</tr>
	<tr align='center'>
		<td><b>Имя</b></td>
		<td><b>Фамилия</b></td>
		<td><b>Адрес</b></td>
		<td><b>Номер телефона</b></td>
	</tr>

<?php

$json = read_json('files/phone.json');
// Вывожу их в цикле
for($i = 0; $i < count($json); $i++) :

?>
	<tr>
		<td><?=$json[$i]['firstName'];?></td>
		<td><?=$json[$i]['lastName'];?></td>
		<td><?=$json[$i]['address'];?></td>
		<td><?=$json[$i]['phoneNumber'];?></td>
	</tr>
	
<?php endfor; // Конец цикла ?>

</table>
<!-- Закрытие таблицы для вывода телефонной книги -->

</body>
</html>
