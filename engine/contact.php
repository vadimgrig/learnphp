<?php

// print_r($_GET);

// print_r($_POST);

$name = htmlspecialchars($_POST['name'] ?? '');

echo  "Ми передали дані:" . " " . $name . "<br>";

$lastname = strip_tags($_POST['lastname'] ?? '');

echo "Ваш ID:" . " " . $lastname . "<br>";

$check = strip_tags($_POST['check'] ?? '');

echo "Чекбокс:" . " " . $check;

if ($check == "on") echo " " . "Check" . "<br>";

$number = $_POST['number'] ?? '';

var_dump($number);
