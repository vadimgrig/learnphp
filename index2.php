
<?php
$names = 'Alex, Cris, Elena'; // array
$int = 10; //string
$float = 75.5; //float
$bool = true; //or false //boolean
$null = null; //null
$fruits = ['apple', 'orange', 'banana'];
$user = new stdClass; // object
$file = fopen('text.txt', 'r'); //resource

//Условия if else, switch, case, match
$a = 5;
$b = 2;
$c = 3;

if (1 == $a && 2 == $b || 2 == $a) {
	echo "hello world";
} else {
	echo "false";
}
// Сокращеный синтаксис
$result = ($a == 1) ? "true" : "false";
echo $result;

if ($a == $b)
	echo "Privet";
else
	echo "Privet2";
echo ($a) ?: "false";

if ($a == 1) {
	echo "true";
} elseif ($a == 2) {
	echo "true = 2";
} elseif ($a == 3) {
	echo "false2";
} else {
	echo "false3";
}

if ($a <= 1)
	echo "true";
else
	echo "false";

// конструкция switch
switch ($a) {
	case 1:
		echo "a = 1";
		break;
	case 2:
		echo "a = 2";
		break;
	case 3:
		echo "a = 3";
		break;
	default:
		echo " not avilable";
}


// Конструкция match
$fruit = "pear";
$result = match ($fruit) {
	"apple" => "apple",
	"orange" => "orange",
	"mango" => "mango",
	default => "not avilable"
};
echo $result;
