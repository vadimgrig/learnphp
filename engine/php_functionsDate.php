<?php
//trim  Удаление пробелов и других знаков по требованию
// ltrim
// rtrim

// strip_tags удаление html тегов  $result = strip_tegs($mesege, ['b,'i']); Разрешение определенных тегов
// strip_
// htmlspecialchars заменяет теги на аналоги их сущоности
// htmlspecialchars_decode Декодирует HTML код 
// html_entities
// html_entity_decode

// str_replace
// str_ireplace
// strtolower //Преобразовует символы в большие
// strtoupper //Преобразрвует символи в маленткие

// strlen количество байт/ mb_strlen количество символов
// strpos / mb_strpos
// substr / mb_substr

//function to work date

// $today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
// $today = date("m.d.y");                         // 03.10.01
// $today = date("j, n, Y");                       // 10, 3, 2001
// $today = date("Ymd");                           // 20010310
// $today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
// $today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
// $today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
// $today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
// $today = date("H:i:s");                         // 17:16:18
// $today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)

echo date("D-M-Y H:i:s");
?>
<br>
<?php
echo date("d, m, y");
?>
<br>
<?php
echo date("l jS \of F Y h:i:s A");
?>
<br>
<?php
echo date("l", mktime(0, 0, 0, 7, 1, 2000));
?>
<br>
<?php


echo date_default_timezone_get() . "<br>";

// echo phpinfo() . "<br>";

$start = microtime(true);

echo "Test";

$end = microtime(true);


echo $end - $start;