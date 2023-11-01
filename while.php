<?php

// Цикл While Форма 1
$a = 0;

while ($a < 10) {
	echo $a++ . "<br>";
}; ?>

<!-- Форма 2 -->
<br>
<?php
$b = 0;

while ($b < 10) {
	echo $b . "<br>";

	$b++;
};
?>

<!-- Форма 3 -->
<br>
<?php
$c = 10;

while ($c >= 1) {
	echo $c . "<br>";

	$c--;
};
?>

<!-- Цикл в нутри цикла -->
<br>
<?php

$r = 3;
$k = 3;
$i = 1;
echo "<table border=\"1\">";
while ($i <= $r) {
	echo "<tr>";
	$j = 1;
	while ($j <= $k) {
		echo "<td>Строка" . $i . "</td>";
		$j++;
	};
	echo "</tr>";
	$i++;
};

echo "</table>";
?>

<!-- Цикл для построения данных -->
<br>
<?php

$year = 1901;

echo "<select>";

while ($year <= 2023) :
	echo "<option value=" . $year . ">$year</option>";
	$year++;
endwhile;

echo "</select>";

?>

<!-- do while -->
<br>
<?php

$dw = 1;

do {
	echo $dw . "<br>";
	$dw++;
} while ($dw <= 10);
