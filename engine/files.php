<?php

// $_SERVER //$_GET //$_POST //$_FILES

// file_exists



// print_r($_FILES); //Зберігає дані про файли
// if (!empty($_FILES)) {

// 	move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name']);
// };


// перевірка присутності файлу

// if (file_exists("upload/1.jpg")) {
// 	echo "files exists" . '<br>';
// } else echo "files does not exist" . '<br>';

// // Ще одна перевірка
// if (file_exists("test.txt")) {
// 	echo "files exists" . '<br>';
// } else echo "files does not exist" . '<br>';


//rename переименовать файл или дерикторию

// rename('upload/1.jpg', 'upload/rename/123.jpg');

//Создание каталога Не может создавать подкаталоги
// mkdir("SVG");

// rmdir удаление катклогов

// rmdir('1');

//copy + переименовует при копировании
// copy('upload/rename/123.jpg', 'upload/1.jpg');

//unlink

// unlink('upload/rename/123.jpg');

// is_dir | is_file проверка типа двнных (Файл или каталог)

// if (is_dir('test.txt')) {
// 	echo 'Это директория';
// } elseif (is_file('test.txt')) {
// 	echo 'Это файл';
// }

// file_get_contents

// $data_files = file_get_contents('test.txt', FALSE, NULL, 1, 10);

// echo nl2br($data_files),
// var_dump($data_files); //nl2br — Вставляет HTML-код разрыва строки перед каждым переводом строки


// получение данных с веб ресурсов
// $data_site = file_get_contents('https://asc.od.ua');

// echo htmlspecialchars($data_site);


// file Передает данные из файла в виде масива

// $text = file('test.tds', FILE_IGNORE_NEW_LINES);

// var_dump($text);

// $data_site = file('https://asc.od.ua');


// foreach ($data_site as $num => $line) {
// 	echo $num . ': ' . htmlspecialchars($line) . '<br>';
// };
// print_r(htmlspecialchars($data_site));

// file_put_contents добавление данных в файл


// $text = "test.txt";



// $add = "Vadimka\n";

// $bytes = file_put_contents($text, $add, FILE_APPEND | LOCK_EX); // функция добавляет и заменяет соджержимое FILE_APPEND добавляет к содержимому, LOCK_EX не дает другим скриптам работать с єиимм файлом

// echo $bytes;

// filesize передает размер файла


// fopen, fwrite, fread , fclose функции работы с файлами откритие, запись, чтение, закрытие


$file = "test.txt";

$handle = fopen($file, "a+");

$text = fread($handle, filesize($file));

fwrite($handle, 'kjfghaskjdfgasjk');

fclose($handle);



echo $text;




?>

<form action="" method="POST" enctype="multipart/form-data">
	<p><input type="text" name="title"></p>
	<p><input type="file" name="file"></p>
	<button>Submit</button>
</form>

<?php
echo phpinfo();
