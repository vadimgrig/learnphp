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
// ! $a 	Отрицание 	true, если $a не true.
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
// Инкремент/декремент ++$a, --$b
// $a++;

$a = 1;
$b = 1;
var_dump($a++);
echo $a . " ";

var_dump(++$a);
echo $a . " ";

var_dump(++$b);
echo $b . " ";


$a = 2;
$b = 2;
$c = "String";
$d = "14";
$f = +$d;
$t = 2;
$t += 4;  // $t + $t =

$min = 10;
$min -= 5;

$x = 2;
$z = &$x;

$x = 10;
$y = $x . " " . $z;

$m = ($a * $b) + ($a * $b) - ($a / $b) + ($a + $b);
$s = ($a + $b) + ($a - $b);
$a = ($a / $b) * 150;
$mod = $a % $b;
$mod1 = $a ** $b;
$mod2 = $a % $b;




// вывод
echo $m;
?>
<br>
<?php
echo $s;
?>
<br>
<?php
echo $a;
?>
<br>
<?php
echo $mod;
?>
<br>
<?php
echo $mod2;
var_dump($mod2);
?>
<br>
<?php
var_dump($mod1);
?>
<br>
<?php
var_dump($c);
?>
<br>
<?php
var_dump($f);
?>
<br>
<?php
echo $t;
?>
<br>
<?php
echo $min;
?>
<br>
<?php
echo $y;