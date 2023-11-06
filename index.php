<?php
// = присваивание
// == равно
// === Тожедественно равно
// != или <> не равно
// !== тождественно не равно
// < меньше
// > больше
// <= меньше или равно
// >= больше или равно
//|| логическое ИЛИ
// && логическое И

// $c = "string";
// $c = $c . "str"; String + str Конкатенация

// $a and $b 	И 	true, если и $a, и $b true.
// $a or $b 	Или 	true, если или $a, или $b true.
// $a xor $b 	Исключающее или 	true, если $a, или $b true, но не оба.
// !$a 	Отрицание 	true, если $a не true.
// $a && $b 	И 	true, если и $a, и $b true.
// $a || $b 	Или 	true, если или $a, или $b true.
//
// арифметические операторы
// = присваивание
// + сложение
// - вычетание
// * умножение
// / деление
// % деление по модулю
// ** возведение в степень

// -$a = '3'; отрицание
// $b = +$a; идентичность

// int + string = int

// $x = 2;   Присваивание по ссылке
// $z = &$x;

// $x = 10;

// $a = 2 + 2;
// $b = 4;
// $r = $a + $b;
// $r = $a * $b;

// $t = 2;
// $t += 4;  // $t + $t = 
// $t = 2;
// $t -= 4;  // $t - $t = 
// С=окращенная запис += -= *= /= %= **= 

// $a =$a + 1;
// Инкремент ++$a, --$b
// $a++;

// $a = 1;
// $b = 1;
// var_dump($a++);
// echo $a . " ";

// var_dump(++$a);
// echo $a . " ";

// var_dump(++$b);
// echo $b . " ";
// <!-- <!DOCTYPE html>
// <html lang="en">

// <head>
// 	<meta charset="UTF-8">
// 	<meta name="viewport" content="width=\, initial-scale=1.0">
// 	<title>Block System</title>
// </head>

// <body>

// 	include 'templates/header.php'; // При ошибке продолжает работу скрипта
// 	require_once 'engine/math.php';
// 	include 'templates/aside.php';
// 	include_once 'templates/contents.php';
// 	include 'templates/footer.php';

// 	//ПРоверка существующей функии
// 	if (!function_exists('sum')) {
// 		function sum()
// 		{
// 			echo 'hello';
// 		}
// 	};

// </body>

// </html> -->
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=\, initial-scale=1.0">
	<title>Block System</title>
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<?php
	// require_once 'templates/header.php';

	require_once 'engine/sessions.php';

	require_once 'engine/team.php';

	// require_once 'templates/footer.php';

	?>
</body>

</html>