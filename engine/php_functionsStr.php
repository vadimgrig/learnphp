<?php
//trim  Удаление пробелов и других знаков по требованию
// ltrim
// rtrim

// strip_tags удаление html тегов  $result = strip_tegs($mesege, ['b,'i']); Разрешение определенных тегов
// strip_
// htmlspecialchars заменяет теги на аналоги их сущоности
// htmlspecialchars_decode Декодирует HTML код 
// html_entities


// str_replace
// str_ireplace
// strtolower //Преобразовует символы в большие
// strtoupper //Преобразрвует символи в маленткие

// strlen количество байт/ mb_strlen количество символов
// strpos / mb_strpos
// substr / mb_substr


// html_entity_decode
// перенос строки \n

//trim удалять лишние проюелы и заданиые символи

// $messege = "   Hello,  <h1>!</h1> <script>alert('test')</script>              World.   ";

// $messege = "Hello, World";

// $resLet = strlen($messege);

// $resPos = strpos($messege, 'H');

// $resmbPos = mb_strpos($messege, 'World');

// $resSub = strlen("asdfg");

// // var_dump($resLet);

// var_dump($resPos);

// if ($resPos !== false) {
// 	echo "Она здесь:" . " " .  $resPos;
// } else {
// 	echo "Буквы нет ";
// };

// if ($resmbPos !== false) {
// 	echo "Она здесь:" . " " .  $resmbPos;
// } else {
// 	echo "Буквы нет ";
// };
// var_dump($messege);

// $resul = trim($messege, " . ");

// $result = str_replace('[b]', '<b>', $messege);

// $result = str_replace('[/b]', '</b>', $result);

// $bb_code = ['[b]', '[/b]', '[em]', '[/em]'];
// $html_code = ['<b>', '</b>', '<em>', '</em>'];


// $result = str_replace($bb_code, $html_code, $messege);

// $repl = str_replace('Hello', 'Priver', $messege);

// $UpperCase = "khskfjhdskjfhsdkjf";
// $LowerCase = "khskfjhHJKHKJjfhsdkjf";

// $resUpper = strtoupper($UpperCase);

// $resLow = strtolower($LowerCase);

// var_dump($resUpper);

// var_dump($resLow);
// $str = strip_tags($messege);

// $htmlSp = htmlspecialchars($messege);

// $htmlDec = htmlspecialchars_decode($messege);

// var_dump($resul);

// var_dump($str);



// var_dump($htmlDec);
