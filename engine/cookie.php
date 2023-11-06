<?php
// $_COOKIE

setcookie('name', 'Vadim');

setcookie('name2', 'Vadim2', time() + 3600 * 24 * 365, "/engine", "", true,);

setcookie("name3", 'Vadim3', time() + 3600 * 24 * 25, "/");

setcookie("cooks", "Str", time() + 3600, "/");

var_dump($_COOKIE);
