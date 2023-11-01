<!-- foreach 2 -->

<?php
// Цикл foreach

$names = ["Alex", "Vadym", "Vitos", "Natali", "Ida"];



foreach ($names as $name) {
    $name .= ".";
    echo $name . "<br>";
};
?>
<br>
<?php

$container = [
    "Audio" => "3",
    "Video" => "4",
    "Mag" => "2",
    "num" => 2
];

foreach ($container as $key => $item) {
    echo $key . " " . $item . "<br>";
}
