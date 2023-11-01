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

// Цыкли Форма 1
for ($i = 0; $i <= 10; $i++) {
    echo $i . "<br>";
};
?>
<br>
<!-- Форма 2 -->
<?php
$a = 0;
for (; $a <= 10; $a++) {
    echo $a . "<br>";
};
?>
<br>
<!-- Форма 3 -->
<?php
$b = 0;
for (; $b <= 10;) {
    echo $b . "<br>";

    $b++;
};
?>
<br>
<!-- Форма 4 -->
<?php
$c = 0;
for (;;) {
    echo $c . "<br>";

    $c++;

    if ($c === 11) break;
};
?>
<br>
<!-- Форма 4 + Массив -->
<?php
$mass = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];

for ($d = 0; $d < count($mass); $d++) {
    echo $mass[$d] . "<br>";
};