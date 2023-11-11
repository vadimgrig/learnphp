
<?php
mysqli_report(MYSQLI_REPORT_OFF); // Отключение вывода ошибки

$db = @mysqli_connect('localhost', 'root', '', 'aCRM') or die('DB error');

mysqli_set_charset($db, 'utf8') or die('Не верная кодировка');


// Вывод ошибки авторизации к базе данных

// if (!$db) die(mysqli_connect_error());

// if (!$db) {
// 	/* Use your preferred error logging method here */
// 	error_log('Connection error: ' . mysqli_connect_error(), die());
// };
